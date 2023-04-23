<?php

[$n, $t] = explode(' ', trim(fgets(STDIN)));
$arr_c = explode(' ', trim(fgets(STDIN)));
$arr_r = explode(' ', trim(fgets(STDIN)));

if (in_array($t, $arr_c)) {
  $target = $t;
} else {
  $target = $arr_c[0];
}

for ($i=0; $i < $n; $i++) { 
  if ($arr_c[$i] === $target) {
    $arr_m[] = $arr_r[$i];
  }
}

$max = max($arr_m);

echo array_search($max, $arr_r) + 1;