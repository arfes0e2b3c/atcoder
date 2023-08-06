<?php

[$n, $m] = explode(' ', trim(fgets(STDIN)));
$field = [];
while($line = trim(fgets(STDIN))){
  $field[] = str_split($line);
}
$answer = '';
for ($i=0; $i < $n; $i++) { 
  for ($j=0; $j < $m; $j++) { 
    if(checkIsTak($i, $j)) {
      $answer .= ($i + 1) . ' ' . ($j + 1) . PHP_EOL;
      $j += 4;
    }
  }
}

echo $answer;

function checkIsTak($i, $j) {
  $left_up = checkLeftUpIsTak($i, $j);
  $right_down = checkRightDownIsTak($i, $j);
  if($left_up && $right_down) {
    return true;
  }else{
    return false;
  }
}

function checkLeftUpIsTak($i, $j) {
  global $field;
  for ($n=$i; $n < $i+4; $n++) { 
    for ($m=$j; $m < $j+4; $m++) { 
      $token = '';
      if($n < $i+3 && $m < $j+3) {
        $token = '#';
      }else{
        $token = '.';
      }
      if(!isset($field[$n][$m]) || $field[$n][$m] !== $token) {
        return false;
      }
    }
  }
  return true;
}

function checkRightDownIsTak($i, $j) {
  global $field;
  for ($n=$i+8; $n > $i+4; $n--) { 
    for ($m=$j+8; $m > $j+4; $m--) { 
      $token = '';
      if($n > $i+5 && $m > $j+5) {
        $token = '#';
      }else{
        $token = '.';
      }
      if(!isset($field[$n][$m]) || $field[$n][$m] !== $token) {
        return false;
      }
    }
  }
  return true;
}

