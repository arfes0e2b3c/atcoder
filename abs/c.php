<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));
$jArr = [];
for ($i=0; $i < $n ; $i++) { 
  $j = 0;
  while($arr[$i] % 2 === 0) {
    $j++;
    $arr[$i] /= 2;
  }
  $jArr[] = $j;
}
echo min($jArr);