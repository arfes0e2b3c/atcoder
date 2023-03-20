<?php

fscanf(STDIN, '%d %d %d', $n, $a, $b);
$ans = 0;
for ($i=1; $i <= $n; $i++) { 
  $arr = str_split($i);
  $sum = array_sum($arr);
  if($sum >= $a && $sum <= $b) {
    $ans += $i;
  }
}
echo $ans;