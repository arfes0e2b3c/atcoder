<?php

$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));

$count = 0;

for ($i=0; $i < $n; $i++) { 
  if ($s[$i] === '|') $count++;
  if ($s[$i] === '*' && $count === 1) {
    echo 'in';
    return;
  }
}

echo 'out';