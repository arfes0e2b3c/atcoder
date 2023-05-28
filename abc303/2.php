<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$list = [];
while($arr = trim(fgets(STDIN))){
  $arr = explode(' ', $arr);
  $list[] = $arr;
}
$answer = [];
for ($i=0; $i < $m; $i++) { 
  $arr = explode(' ', trim(fgets(STDIN)));
  for ($j=0; $j < $n; $j++) { 
    if($j > 0) {
      if(!isset($answer[$list[$i][$j]][$list[$i][$j - 1]])){
        $answer[$list[$i][$j]][$list[$i][$j - 1]] = 1;
      }
    }
    if($j < $n - 1) {
      if(!isset($answer[$list[$i][$j]][$list[$i][$j + 1]])){
        $answer[$list[$i][$j]][$list[$i][$j + 1]] = 1;
      }
    }
  }
}
$count = 0;
for ($i=1; $i <= $n; $i++) { 
  $count += count($answer[$i]);
}
echo ($n * ($n - 1) - $count) / 2;