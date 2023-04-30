<?php

[$n, $a, $b] = explode(' ', trim(fgets(STDIN)));
$arr = explode(' ', trim(fgets(STDIN)));

foreach ($arr as $key => $value) {
  if($value == ($a + $b)) echo $key + 1;
}
