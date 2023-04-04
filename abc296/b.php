<?php

$cols = [
  1 => 'a',
  2 => 'b',
  3 => 'c',
  4 => 'd',
  5 => 'e',
  6 => 'f',
  7 => 'g',
  8 => 'h',
];
for($i=8;$i>=1;$i--) {
  $arr = str_split(trim(fgets(STDIN)));
  for($j=1;$j<=8;$j++) {
    if($arr[$j - 1] === '*') echo $cols[$j] . $i;
  }
}