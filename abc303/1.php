<?php

$n = trim(fgets(STDIN));
$s = str_split(trim(fgets(STDIN)));
$t = str_split(trim(fgets(STDIN)));

foreach ($s as $key => $char) {
  if($s[$key] == $t[$key]) {

  }else if($s[$key] == 'l' && $t[$key] == '1' || $s[$key] == '1' && $t[$key] == 'l'){
    
  }else if($s[$key] == 'o' && $t[$key] == '0' || $s[$key] == '0' && $t[$key] == 'o'){
    
  }else{
    echo 'No';
    return;
  }
  
}
echo 'Yes';