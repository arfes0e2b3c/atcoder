<?php

[$n, $x] = explode(' ', trim(fgets(STDIN)));
$arr = explode(' ', trim(fgets(STDIN)));
$ans = [];
if($x == 0){
  echo 'Yes';
  return;
}
foreach ($arr as $value) {
  if(isset($ans_p[$value]) || isset($ans_m[$value])) {
    echo 'Yes';
    return;
  } else {
    $ans_p[$value - $x] = 1;
    $ans_m[$value + $x] = 1;
  }
}
echo 'No';