<?php

[$n, $d] = explode(' ', trim(fgets(STDIN)));
while($arr = trim(fgets(STDIN))){
  $list[] = explode(' ', $arr);
}

$affection_list = [$list[0]];

$key_list = array_fill(0, $n, 0); 
$key_list[0]++;

$finish_count = 0;
$total_count = count($affection_list);
while($finish_count != $total_count) {
  $count = 0;
  for ($j=0; $j < $n; $j++) { 
    if(sqrt(($list[$j][0] - $affection_list[$finish_count][0]) ** 2 + ($list[$j][1] - $affection_list[$finish_count][1]) ** 2) <= $d) {
      if($key_list[$j] == 0) {
        $affection_list[] = $list[$j];
      }
      $key_list[$j]++;
    }
  }
  $finish_count++;
  $total_count = count($affection_list);
}


foreach ($key_list as $value) {
  if($value > 0) {
    echo 'Yes' . PHP_EOL;
  }else{
    echo 'No' . PHP_EOL;
  }
}