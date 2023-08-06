<?php

$arr = explode(' ', trim(fgets(STDIN)));
$ave = (array_sum($arr) - 1) / count($arr);
$sum = 0;
foreach ($arr as $value) {
  $sum += abs($ave - $val);
}
echo ($sum - 1) / 2;