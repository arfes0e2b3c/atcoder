<?php

$n = trim(fgets(STDIN));
$str = trim(fgets(STDIN));
if($str == '') {
  echo '' . PHP_EOL;
  return;
}
$reverse = strrev($str);
if(substr($str, 0, 1) == '(' && substr($reverse, 0, 1) == ')'){
  echo '' . PHP_EOL;
  return;
}

while(true) {
  $reverse = strrev($str);
  $start = strlen($str) - 1 - strpos($reverse, '(');
  $end = strpos($str, ')');
  if($start != false && $end != false && $start < $end) {
    $str = substr($str, 0, $start) . substr($str, $end + 1);
  } else {
    echo $str . PHP_EOL;
    return;
  }
}