<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));

$sum = 0;
foreach ($arr as $key => $value) {
  $sum += $value;
  if($key % 7 === 6) {
    echo $sum . ' ';
    $sum = 0;
  }
}