<?php

$n = trim(fgets(STDIN));
while($line = trim(fgets(STDIN))){
  $arr[] = $line;
}
for ($i=0; $i < $n - 1; $i++) { 
  for ($j=$i+1; $j < $n; $j++) { 
    if(is_parindrome($arr[$i], $arr[$j])){
      echo 'Yes' . PHP_EOL;
      return;
    }
  }
}

echo 'No' . PHP_EOL;

function is_parindrome($i, $j) {
  $str1 = $i . $j;
  $str2 = $j . $i;

  if($str1 === strrev($str1))return true;
  if($str2 === strrev($str2))return true;
  return false;
}