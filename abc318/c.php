<?php

[$n, $d, $p] = explode(' ', trim(fgets(STDIN)));
$fares = explode(' ', trim(fgets(STDIN)));

$day_count = 1;
$current_min = 0;
$pass_count = 0;
$answer = 1000000000 * count($fares) + 1;
$memo = [];

function tour($day_count, $current_min, $pass_count) {
  global $answer;
  global $fares;
  global $n;
  global $d;
  global $p;
  if(isset($memo[$day_count][$current_min][$pass_count])) {
    return $memo[$day_count][$current_min][$pass_count];
  }
  if(!($current_min >= $answer || $day_count > $n)){
    $answer1 = 0;
    $answer2 = 0;
    if($current_min + $fares[$day_count - 1] < $answer)$answer1 = tour($day_count + 1, $current_min + $fares[$day_count - 1], $pass_count);
    if($pass_count === 0){
      if($current_min + $p < $answer)$answer2 = tour($day_count + 1, $current_min + $p, $pass_count + $d - 1);
    }else{
      $answer2 = tour($day_count + 1, $current_min, $pass_count - 1);
    }
    $memo[$day_count][$current_min][$pass_count] = min($answer1, $answer2);
    return min($answer1, $answer2);
  }else{
    return $current_min;
  }
}
$answer = tour($day_count, $current_min, $pass_count);
echo $answer . PHP_EOL;