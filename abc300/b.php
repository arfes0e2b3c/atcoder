<?php

[$h, $w] = explode(' ', trim(fgets(STDIN)));
$arr_a = [];
for ($i=0; $i < $h; $i++) { 
  $arr_a[] = str_split(trim(fgets(STDIN)));
}
$arr_b = [];
for ($i=0; $i < $h; $i++) { 
  $arr_b[] = str_split(trim(fgets(STDIN)));
}

$count = 0;
while ($count < count($arr_a)) {
  $result = same_line($arr_a[0], $arr_b[$count], $count);
  if($result <= count($arr_a[0])) break;
  $count++;
}

for ($i=0; $i < $count; $i++) { 
  $arr_a = shift($arr_a);
}

for ($j=0; $j < count($arr_a[0]); $j++) { 
  for ($i=0; $i < $result; $i++) { 
    $arr_a[$j] = shift_w($arr_a[$j]);
  }
}


echo $result . $count;

if($arr_a === $arr_b) {
  echo 'Yes';
} else {
  echo 'No';
}




function same_line($line_a, $line_b) {
  $expand_line = [...$line_b, ...$line_b];
  $count = 0;
  while ($count <= count($line_a)) {
    $current = array_slice($expand_line, $count, count($line_a));
    if($line_a == $current) {
      break;
    }
    $count++;
  }
  return $count;
}

function shift($arr) {
  $first = $arr[0];
  for ($i=0; $i < count($arr) - 1; $i++) { 
    $arr[$i] = $arr[$i + 1];
  }
  $arr[count($arr)] = $arr[0];
  return $arr;
}