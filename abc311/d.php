<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$field = [];
while($line = trim(fgets(STDIN))){
  $field[] = str_split($line);
}

$y = 1;
$x = 1;

$field_count = [];
$field_count[1][1] = true;

$dirs = [
  'left' => [-1, 0],
  'right' => [1, 0],
  'up' => [0, -1],
  'down' => [0, 1],
];

function transfer($y, $x, $dir) {
  global $field;
  global $field_count;
  if(!($y === 1 && $x === 1) && isset($field_count[$y][$x]) && $field_count[$y][$x] == true)return;
  while(true){
    [$y, $x, $can_move_next] = step($y, $x, $dir);
    if($can_move_next === false) break;
  }
  $move_dirs = check_direction($y, $x, $dir);
  var_dump($move_dirs);
  foreach ($move_dirs as $next_dir) {
    transfer($y, $x, $next_dir);
  }
}

function step($y, $x, $dir) {
  global $dirs;
  global $field;
  global $field_count;
  if($dir == null) return [$y, $x, false];
  echo $field[$y + $dirs[$dir][0]][$x + $dirs[$dir][1]];
  if($field[$y + $dirs[$dir][0]][$x + $dirs[$dir][1]] == '.') {
    if(!isset($field_count[$y + $dirs[$dir][0]][$x + $dirs[$dir][1]]))$field_count[$y + $dirs[$dir][0]][$x + $dirs[$dir][1]] = true;
    return [$y + $dirs[$dir][0], $x + $dirs[$dir][1], true];
  }else{
    return [$y, $x, false];
  }
}

function check_direction($y, $x, $dir) {
  global $field;
  $ans = [];
  if($field[$y - 1][$x] === '.' && $dir !== 'down') $ans[] = 'up';
  if($field[$y + 1][$x] === '.' && $dir !== 'uo') $ans[] = 'down';
  if($field[$y][$x - 1] === '.' && $dir !== 'right') $ans[] = 'left';
  if($field[$y][$x + 1] === '.' && $dir !== 'left') $ans[] = 'right';

  return $ans;
}


transfer($y, $x, null);
var_dump($field);
$count = 0;
for ($i=0; $i < $n; $i++) { 
  for ($j=0; $j < $m; $j++) { 
    if(isset($field_count[$j][$i]) && $field_count[$j][$i] === true) $count++;
  }
}
echo $count . PHP_EOL;