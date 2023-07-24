<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));
$slow = 1;
$fast = 1;

function next_step($current) {
  global $arr;
  return $arr[$current - 1];
}

while (true) {
  $slow = next_step($slow);
  $fast = next_step(next_step($fast));
  if($slow === $fast)break;
}

$ans = [];
while (true) {
  $ans[] = $slow;
  $slow = next_step($slow);
  $fast = next_step(next_step($fast));
  if($slow === $fast)break;
}

echo count($ans) . PHP_EOL;
echo implode(' ', $ans) . PHP_EOL;

