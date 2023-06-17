<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));
$list = [];
foreach ($arr as $key => $value) {
  $list[$value][] = $key;
}

$answer = [];
foreach ($list as $key => $value) {
  $answer[] = [$key, $value[1]];
}

usort($answer, function($a, $b) {
  return $a[1] > $b[1] ? 1 : -1;
});

foreach ($answer as $value) {
  echo $value[0] . ' ';
}
echo PHP_EOL;



