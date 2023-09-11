<?php

[$n, $d, $p] = explode(' ', trim(fgets(STDIN)));
$fares = explode(' ', trim(fgets(STDIN)));
rsort($fares);

$total_cost = 0;

while (count($fares) > 0) {
  if (array_sum(array_slice($fares, 0, $d)) > $p) {
    $total_cost += $p;
    $fares = array_slice($fares, $d);
  } else {
    $total_cost += $fares[0];
    array_shift($fares);
  }
}

echo $total_cost . PHP_EOL;
