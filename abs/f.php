<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));
rsort($arr);
$alice = 0;
$bob = 0;
for ($i=0; $i < $n; $i+=2) { 
  $alice += $arr[$i];
}
for ($i=1; $i < $n; $i+=2) { 
  $bob += $arr[$i];
}

echo $alice - $bob;