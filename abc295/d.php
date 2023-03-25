<?php

$s = trim(fgets(STDIN));
$len_s = strlen($s);
$ans = 0;

for ($i=0; $i < $len_s; $i++) { 
  $v = substr($s, $i);
  $len_v = strlen($v);
  $arr = array_fill(0, 10, 0);
  $even = 0;
  for ($j=0; $j < $len_v; $j++) { 
    if(++$arr[$v[$j]] % 2 === 0) $even += 2;
    if($even && $j+1 === $even) {
      $ans++;
    }
  }
}
echo $ans;