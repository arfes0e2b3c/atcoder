<?php

$n = trim(fgets(STDIN));
$s = str_split(trim(fgets(STDIN)));
$arr = [];
$arr['A'] = 0;
$arr['B'] = 0;
$arr['C'] = 0;
$count = 0;
for ($i=0; $i < count($s); $i++) { 
  if($arr[$s[$i]] === 0) {
    $count++;
  }
  $arr[$s[$i]]++;
  if ($count === 3) {
    echo ($i + 1) . PHP_EOL;
    return;
  }
}