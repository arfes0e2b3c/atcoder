<?php

$n = trim(fgets(STDIN));
$arr_bet = [];
for ($i=0; $i < $n; $i++) { 
  $c = trim(fgets(STDIN));
  $arr_a = explode(' ', trim(fgets(STDIN)));
  $arr_bet[] = $arr_a;
}
$x = trim(fgets(STDIN));

$winners = [];
foreach ($arr_bet as $key => $bets) {
  if(in_array($x, $bets)) {
    $winners[] = [$key + 1, count($bets)];
  }
}

$answer_arr = [];
$min = 38;
foreach ($winners as $val) {
  $val[1] < $min ? $min = $val[1] : null ;
}

foreach ($winners as $key => $val) {
  if($min == $val[1]) $answer_arr[] = $val;
}

usort($answer_arr, function($a, $b) {
  return $a[0] > $b[0] ? 1 : -1;
});

$answer_index = [];
echo count($answer_arr) . PHP_EOL;
foreach ($answer_arr as $val) {
  $answer_index[] = $val[0];
}
echo implode(' ', $answer_index) . PHP_EOL;