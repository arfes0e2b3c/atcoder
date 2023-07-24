<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$arr = [];
while($line = trim(fgets(STDIN))){
  $line = explode(' ', $line, 3);
  $line[2] = explode(' ', $line[2]);
  $arr[] = $line;
}

for ($i=0; $i < $n; $i++) { 
  for ($j=0; $j < $n; $j++) { 
    if($arr[$i][0] < $arr[$j][0]) continue;
    $count = 0;
    for ($k=0; $k < count($arr[$i][2]); $k++) { 
      if(array_search($arr[$i][2][$k], $arr[$j][2]) === false) $count++;
    }
    if($count > 0) continue;
    if($arr[$i][0] > $arr[$j][0] || count($arr[$i][2]) < count($arr[$j][2])) {
      echo 'Yes' . PHP_EOL;
      return;
    }
  }
}
echo 'No' . PHP_EOL;