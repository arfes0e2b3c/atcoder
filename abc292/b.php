<?php

[$n, $q] = explode(' ', fgets(STDIN));
$arr = [];
for($i=0;$i<$q;$i++) {
  [$event_num, $player_num] = explode(' ', trim(fgets(STDIN)));
  switch ($event_num) {
    case '1':
      $arr[$player_num] += 1;
      break;
    case '2':
      $arr[$player_num] += 2;
      break;
    case '3':
      echo ($arr[$player_num] > 1 ? 'Yes' : 'No') . PHP_EOL;
      break;
  }
}