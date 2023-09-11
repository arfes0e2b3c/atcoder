<?php

$n = trim(fgets(STDIN));
$arr = [];
for ($i=0; $i < $n; $i++) { 
  $arr[] = explode(' ', trim(fgets(STDIN)));
}
foreach ($arr as $val) {
  for ($i=$val[0]; $i < $val[1]; $i++) { 
    for ($j=$val[2]; $j < $val[3]; $j++) { 
      $answer[$i][$j] = true;
    }
  }
}
$count = 0;
for ($i=0; $i < 100; $i++) { 
  for ($j=0; $j < 100; $j++) { 
    if(isset($answer[$i][$j]))$count++;
  }
}
echo $count . PHP_EOL;