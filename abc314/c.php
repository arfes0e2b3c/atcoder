<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$s = str_split(trim(fgets(STDIN)));
$colors = explode(' ', trim(fgets(STDIN)));
$set_data = [];
for ($i=0; $i < $n; $i++) { 
  $set_data[] = [$s[$i], $colors[$i], $i];
}
for ($i=1; $i <= $m; $i++) { 
  $set_data = shift_strs($i, $set_data);
}

foreach($set_data as $val) {
  echo $val[0];
  // echo $val;
}
echo PHP_EOL;

function shift_strs($color, $data) {
  // $colored_strs = [];
  // foreach ($data as $val) {
  //   if ($val[1] == $color) $colored_strs[] = $val;
  // }
  
  $colored_strs = array_filter($data, function($val) use ($color) {
    // var_dump($val[0]);
    // return true;
    return $val[1] == $color;
  });
  var_dump

  
  // $strs = [];
  // foreach ($colored_strs as $val) {
  //   $strs[] = $val[0];
  // }
  // $copy = $colored_strs;

  // array_unshift($strs, $strs[array_key_last($strs)]);
  for ($i=0; $i < count($colored_strs); $i++) { 
    // echo 1;
    // echo $colored_strs[($i - 1 + count($colored_strs)) % count($colored_strs)][0];
    $data[$colored_strs[$i][2]][0] = 0;
    // $data[$colored_strs[$i][2]][0] = $colored_strs[($i - 1 + count($colored_strs)) % count($colored_strs)][0];
    // $colored_strs[$i][0] = $copy[($i - 1) % count($colored_strs)][0];
  }

  // foreach ($colored_strs as $val) {
  //   $data[$val[2]][0] = $val[0];
  // }

  // foreach ($colored_strs as $key => $val) {
  //   $data[$val[2]][3] = $key;
  // }
  return $data;
}