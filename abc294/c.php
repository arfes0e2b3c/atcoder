<?php

[$n, $m] = explode(' ', fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));
$b = explode(' ', trim(fgets(STDIN)));
$c = array_merge($a, $b);
sort($c);
foreach($c as $key => $val) {
  $ans[$val] = $key + 1;
}
foreach($a as $val) {
  echo $ans[$val] . ' ';
}
echo PHP_EOL;
foreach($b as $val) {
  echo $ans[$val] . ' ';
}