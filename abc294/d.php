<?php

[$n, $q] = explode(' ', fgets(STDIN));
$counter = range(0, $n);
unset($counter[0]);
for ($i=0; $i < $q; $i++) { 
  $order = explode(' ', trim(fgets(STDIN)));
  switch ($order[0]) {
    case 1: break;
    case 2:
      unset($counter[$order[1]]);
      break;
    case 3:
      echo current($counter) . "\n";
      break;
  }
}