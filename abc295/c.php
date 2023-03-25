<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));
$socks = [];
$ans = 0;
for ($i=0; $i < $n; $i++) { 
  if(!isset($socks[$arr[$i]])) $socks[$arr[$i]] = 0;
  if(++$socks[$arr[$i]] % 2 == 0) $ans++;
}
echo $ans;