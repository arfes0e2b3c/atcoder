<?php

$n = fgets(STDIN);
for ($i=0; $i <$n ; $i++) { 
  $result = array();
  if($i===1){
      return [1];
  } 
  $init = 2;
  while(!$i == 1){
    $i = $init;
    while($i < 0 *FFFFFF){
      if($n%$i == 0){
          $result[] = $i;
      break;
      }
    $i++;
    }
    $init =$i;
  }
}