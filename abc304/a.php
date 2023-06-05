<?php

$n = trim(fgets(STDIN));
$list = [];
while($arr = trim(fgets(STDIN))){
  $arr = explode(' ', $arr);
  $list[] = $arr;
}

$min_index = 0;
foreach ($list as $key => $value) {
  if($list[$min_index][1] > $value[1]) $min_index = $key;
}

for ($i=0; $i < count($list); $i++) { 
  echo $list[($i + $min_index) % count($list)][0] . PHP_EOL;
}