<?php

[$n, $d] = explode(' ', trim(fgets(STDIN)));
$date = [];
while($line = trim(fgets(STDIN))){
  $arr = str_split($line);
  for ($i=0; $i < $d; $i++) { 
    if($arr[$i] === 'x') {
      if(!isset($date[$i])){
        $date[$i] = 1;
      }
    }
  }
}
$ans = 0;
$current = 0;
for ($i=0; $i < $d; $i++) { 
  if(!isset($date[$i])) {
    $current++;
  }else{
    $ans = max($ans, $current);
    $current = 0;
  }
}
$ans = max($ans, $current);
echo $ans . PHP_EOL;