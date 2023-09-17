<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));

while($line = trim(fgets(STDIN))){
  $line = explode(' ', $line);
  if($line[0] > $line[1]){
    $new_line = [$line[1], $line[0], -$line[2], -$line[3]];
  }else{
    $new_line = $line;
  }
  $arr[] = $new_line;
}

usort($arr, function($a, $b) {
  return $a[0] - $b[0];
});

var_dump($arr);

$position = [[0, 0]];

$count = 0;

for ($i=0; $i < $n; $i++) { 
  if(!isset($position[$i]))break;
  for ($j=$count; $j < $m; $j++) { 
    if($arr[$j][0] < $i + 1){
      $count = $j;
      break;
    }
    $position[$arr[$j][1] - 1] = [$position[$i][0] + $arr[$j][2], $position[$i][1] + $arr[$j][3]];
  }
}

for ($i=0; $i < $n; $i++) echo (isset($position[$i]) ? implode(' ', $position[$i]) : 'undecidable') . PHP_EOL;
