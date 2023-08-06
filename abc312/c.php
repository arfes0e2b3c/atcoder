<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$a_arr = explode(' ', trim(fgets(STDIN)));//売り手
$b_arr = explode(' ', trim(fgets(STDIN)));//買い手

$all_arr = [...$a_arr, ...$b_arr];

$min = 0;
$max = 1000000001;

$ans = 1000000000;
while($min <= $max) {
  $mid = floor(($min + $max) / 2);
  if(canSell($mid)) {
    $ans = $mid;
    $max = $mid - 1;
  }else{
    $min = $mid + 1;
  }
}
echo $ans . PHP_EOL;

function canSell($mid) {
  global $a_arr;
  global $b_arr;

  $count_a = 0;
  $count_b = 0;
  foreach ($a_arr as $val) {
    $val <= $mid ? $count_a++ : null;
  }
  foreach ($b_arr as $val) {
    $val >= $mid ? $count_b++ : null;
  }
  return $count_a >= $count_b ? true : false;
}

