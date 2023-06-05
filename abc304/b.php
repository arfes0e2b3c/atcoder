<?php

$n = trim(fgets(STDIN));
$str_count = strlen($n);

if($str_count < 3) {
  echo substr($n, 0, $str_count);
  return;
}

$front3 = substr($n, 0, 3);
echo $front3 . str_repeat('0', $str_count - 3);