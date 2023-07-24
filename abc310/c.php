<?php

$n = trim(fgets(STDIN));
$arr = [];
$count = 0;
while($line = trim(fgets(STDIN))) {
  $rev = strrev($line);
  if($line === $rev && !isset($arr[$line])) $count++;
  if(isset($arr[$line])) {
    $arr[$line]++;
  }else{
    $arr[$line] = 1;
  }
  if(isset($arr[$rev])) {
    $arr[$rev]++;
  }else{
    $arr[$rev] = 1;
  }
}

echo (count($arr) + $count) / 2 . PHP_EOL;