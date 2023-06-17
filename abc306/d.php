<?php

$n = trim(fgets(STDIN));
$state = 0;
$dishes = [];
for ($i=0; $i < $n; $i++) { 
  $dish = explode(' ', trim(fgets(STDIN)));
  $dishes[] = $dish;
}
$sum = 0;
foreach ($dishes as $key => $dish) {
  if($state == 0) {
    if($dish[0] == 0) {
      if($dish[1] >= 0){
        $sum += $dish[1];
      }
    }else{
      if($dishes[$key + 1][0] == 0){
        if($dish[1] + $dishes[$key + 1][1] >= 0) {
          $sum += $dish[1];
        }
      }else if($dishes[$key + 1][0] == 1){
        if()
      }
    }
  }else{
    if($dish == 0) {

    }else{

    }
  }
}