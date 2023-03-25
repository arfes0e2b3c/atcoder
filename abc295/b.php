<?php

[$r, $c] = explode(' ', trim(fgets(STDIN)));
$bombs = [];
for ($i=0; $i < $r; $i++) { 
  $row = str_split(trim(fgets(STDIN)));
  foreach ($row as $key => $block) {
    if(is_numeric($block)) $bombs[] = [$block, $i, $key];
    
  } 
  $arr[] = $row;
}

foreach ($bombs as $bomb) {
  $val = $bomb[0];
  $y = $bomb[1];
  $x = $bomb[2];
  for ($i=0; $i < $r; $i++) { 
    for ($j=0; $j < $c; $j++) { 
      if((abs($i - $y) + abs($j - $x)) <= $val) $arr[$i][$j] = '.';
    }
  }
}

foreach($arr as $row) {
  echo implode('', $row) . PHP_EOL;
}