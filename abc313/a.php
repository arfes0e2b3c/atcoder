<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));
if($arr[0] === max(array_slice($arr,1))){
  echo 1 . PHP_EOL;
}elseif(max($arr) != $arr[0]) {
  echo max($arr) - $arr[0] + 1 . PHP_EOL;
}else{
  echo 0 . PHP_EOL;
}