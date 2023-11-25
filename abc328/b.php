<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));

$count = 0;
for ($i=1; $i <= $n; $i++) { 
  for ($j=1; $j <= $arr[$i - 1]; $j++) { 
    $str = $i . $j;
    $split = str_split($str);
    $first = $split[0];
    $c = 0;
    foreach ($split as $value) {
      if($value !== $first) $c++;
    }
    if($c === 0) $count++;
  }
}

echo $count . PHP_EOL;