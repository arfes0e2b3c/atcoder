<?php

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$x = trim(fgets(STDIN));

$count = 0;

for ($i=$a; $i >= 0 ; $i--) { 
  for ($j=$b; $j >= 0 ; $j--) { 
    $rest = $x - 500 * $i - 100 * $j;
    if($rest >= 0 && $rest / 50 <= $c) { 
      $count++;
    }
  }
}

echo $count;