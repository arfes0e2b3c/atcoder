<?php

[$a, $b] = explode(' ', trim(fgets(STDIN)));
$n = trim(fgets(STDIN));

$split = str_split($n);
$binary = 1;
foreach ($split as $key => $value) {
  if(count($split) == $key + 1)continue;
  $binary *= 10;
  $binary += ($value === $split[$key + 1]) ? 1 : 0;
}
$binary *= 10;
$binary = substr($binary, 1);

while($line = trim(fgets(STDIN))){
  [$a, $b] = explode(' ', $line);
  $sliced = substr($binary, $a - 1, $b - $a + 1);
  $count = 0;
  if($sliced[strlen($sliced) - 1] == 1)$count++;
  echo (substr_count($sliced, 1) - $count) . PHP_EOL ;
}