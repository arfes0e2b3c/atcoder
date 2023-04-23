<?php

$start = 1;
$end = trim(fgets(STDIN));

while (true) {
  echo '? ' . floor(($end + $start) / 2) . PHP_EOL;
  $ans = trim(fgets(STDIN));
  if ($ans == 1) {
    $end = floor(($end + $start) / 2);
  } else {
    $start = floor(($end + $start) / 2);
  }

  if ($end - $start == 1) {
    echo '! ' . $start . PHP_EOL;
    return;
  }
}