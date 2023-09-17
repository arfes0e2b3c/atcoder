<?php

$s = str_split(trim(fgets(STDIN)));

$count = 0;
$ans = 0;
for ($i=0; $i < count($s); $i++) { 
  for ($j=$i; $j < count($s); $j++) { 
    if(is_palindrome($s, $i, $j))$ans = max($ans, $j - $i + 1);
  }
}
echo $ans . PHP_EOL;

function is_palindrome($s, $i, $j) {
  $slice = array_slice($s, $i, $j - $i + 1);
  return $slice == array_reverse($slice);
}