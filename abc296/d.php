<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$min = $n**2 + 1;
$sqrt = ceil(sqrt($m));
$pair = floor(sqrt($m));
for ($i=$sqrt; $i <= $n; $i++) { 
  if($i < $m) echo $min;
  $min = $i;
}
if($min != $n**2 + 1) {
  echo $min;
} else {
  echo -1;
}

$min = $n**2 + 1;
for ($i=1; $i <= sqrt($m); $i++) { 
  if($i * $n <= $m) continue;
  if ($i * ceil($m / $i) <= $min) {
    $min = $i * ceil($m / $i);
  }
}
if($min != $n**2 + 1) {
  echo $min;
} else {
  echo -1;
}