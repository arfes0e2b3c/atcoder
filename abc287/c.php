<?php
    $count = 0;
    [$n, $m] = explode(' ', trim(fgets(STDIN)));
    if((int)$n !== (int)$m + 1) {
      echo 'No';
      return;
    }
    if((int)$n === 1){
      echo 'Yes';
      return;
    }
    for($i=0;$i<$m;$i++) {
      $text = explode(' ', trim(fgets(STDIN)));
      $arrM[] = $text[0];
      $arrM[] = $text[1];
    }
    $num1 = array_count_values($arrM);
    // var_dump($num1);
    $num2 = array_count_values($num1);
    // var_dump($num2);
    if($num2[1] === 2 && $num2[2] === ((int)$n - 2)){
      echo 'Yes';
    }else{
      echo 'No';
    }
?>