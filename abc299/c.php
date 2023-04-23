<?php

$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));

$max = 0;
$count = 0;

for ($i=0; $i < $n; $i++) { 
  if ($s[$i] === 'o') {
    $count++;
  } else {
    $max = max($max, $count);
    $count = 0;
  }
}

$max = max($max, $count);

if ($max === 0 || $max == $n) {
  echo -1;
} else {
  echo $max;
}