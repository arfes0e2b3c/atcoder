<?php

$m = trim(fgets(STDIN));

$s1 = str_split(trim(fgets(STDIN)));
$s2 = str_split(trim(fgets(STDIN)));
$s3 = str_split(trim(fgets(STDIN)));


$min = PHP_INT_MAX;
for ($i=0; $i < 10; $i++) { 
  $stopped1 = false;
  $stopped2 = false;
  $stopped3 = false;

  for ($j=0; $j < 3 * $m + 1; $j++) { 
    if($stopped1 === false && $s1[$j % $m] == strval($i)){
      $stopped1 = true;
    }else if($stopped2 === false && $s2[$j % $m] == strval($i)){
      $stopped2 = true;
    }else if($stopped3 === false && $s3[$j % $m] == strval($i)){
      $stopped3 = true;
    }
    if($stopped1 && $stopped2 && $stopped3) {
      $min = min($min, $j);
      break;
    };
  }

  $stopped1 = false;
  $stopped2 = false;
  $stopped3 = false;
  for ($j=0; $j < 3 * $m + 1; $j++) { 
    if($stopped1 === false && $s1[$j % $m] == strval($i)){
      $stopped1 = true;
    }else if($stopped3 === false && $s3[$j % $m] == strval($i)){
      $stopped3 = true;
    }else if($stopped2 === false && $s2[$j % $m] == strval($i)){
      $stopped2 = true;
    }
    if($stopped1 && $stopped2 && $stopped3) {
      $min = min($min, $j);
      break;
    };
  }

  $stopped1 = false;
  $stopped2 = false;
  $stopped3 = false;
  for ($j=0; $j < 3 * $m + 1; $j++) { 
    if($stopped2 === false && $s2[$j % $m] == strval($i)){
      $stopped2 = true;
    }else if($stopped1 === false && $s1[$j % $m] == strval($i)){
      $stopped1 = true;
    }else if($stopped3 === false && $s3[$j % $m] == strval($i)){
      $stopped3 = true;
    }
    if($stopped1 && $stopped2 && $stopped3) {
      $min = min($min, $j);
      break;
    };
  }

  $stopped1 = false;
  $stopped2 = false;
  $stopped3 = false;
  for ($j=0; $j < 3 * $m + 1; $j++) { 
    if($stopped2 === false && $s2[$j % $m] == strval($i)){
      $stopped2 = true;
    }else if($stopped3 === false && $s3[$j % $m] == strval($i)){
      $stopped3 = true;
    }else if($stopped1 === false && $s1[$j % $m] == strval($i)){
      $stopped1 = true;
    }
    if($stopped1 && $stopped2 && $stopped3) {
      $min = min($min, $j);
      break;
    };
  }

  $stopped1 = false;
  $stopped2 = false;
  $stopped3 = false;
  for ($j=0; $j < 3 * $m + 1; $j++) { 
    if($stopped3 === false && $s3[$j % $m] == strval($i)){
      $stopped3 = true;
    }else if($stopped1 === false && $s1[$j % $m] == strval($i)){
      $stopped1 = true;
    }else if($stopped2 === false && $s2[$j % $m] == strval($i)){
      $stopped2 = true;
    }
    if($stopped1 && $stopped2 && $stopped3) {
      $min = min($min, $j);
      break;
    };
  }

  $stopped1 = false;
  $stopped2 = false;
  $stopped3 = false;
  for ($j=0; $j < 3 * $m + 1; $j++) { 
    if($stopped3 === false && $s3[$j % $m] == strval($i)){
      $stopped3 = true;
    }else if($stopped2 === false && $s2[$j % $m] == strval($i)){
      $stopped2 = true;
    }else if($stopped1 === false && $s1[$j % $m] == strval($i)){
      $stopped1 = true;
    }
    if($stopped1 && $stopped2 && $stopped3) {
      $min = min($min, $j);
      break;
    };
  }
}
echo ($min == PHP_INT_MAX ? -1 : $min) . PHP_EOL;