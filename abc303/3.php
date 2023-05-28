<?php

[$n, $m, $h, $k] = explode(' ', trim(fgets(STDIN)));
$move_arr = str_split(trim(fgets(STDIN)));
$tasks = [];
$map = [];
for ($i=0; $i < $m; $i++) { 
  [$x, $y] = explode(' ', trim(fgets(STDIN)));
  $map[$x][$y] = 1;
}

$taskChange = [
  'R' => [1, 0],
  'L' => [-1, 0],
  'U' => [0, 1],
  'D' => [0, -1],
];
$player_position = [0,0];
foreach ($move_arr as $move) {
  $task = $taskChange[$move];
  $player_position[0] += $task[0];
  $player_position[1] += $task[1];
  $h--;
  if($h >= 0 && isset($map[$player_position[0]][$player_position[1]])) {
    $h = max($k, $h);
  }
  if($h < 0) {
    echo 'No';
    return;
  }
}
echo 'Yes';