<?php
    $n = (int) fgets(STDIN);
    for($i=1;$i<=$n;$i++) {
      $arr[] = trim(fgets(STDIN));
    }
    $nums = array_count_values($arr);
    if($nums['For'] > count($arr) / 2) {
      echo 'Yes';
    }else{
      echo 'No';
    }
?>