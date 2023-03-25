<?php

$n = trim(fgets(STDIN));
$arr = explode(' ', trim(fgets(STDIN)));

$count = 0;
$words = ['and', 'not', 'that', 'the', 'you'];
foreach ($words as $word) {
  if(array_search($word, $arr) !== false){
    echo 'Yes';
    return;
  }
}
echo 'No';