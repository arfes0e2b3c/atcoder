<?php

[$a, $b] = explode(' ', trim(fgets(STDIN)));
$arr = explode(' ', trim(fgets(STDIN)));

$sum = 0;
foreach ($arr as $key => $value) {
  if ($value <= $b) {
    $sum += $value;
  }
}

echo $sum . PHP_EOL;