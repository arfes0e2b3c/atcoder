<?php
    $count = 0;
    [$n, $m] = explode('', fgets(STDIN));
    for($i=0;$i<$n;$i++) {
      $arrS[] = trim(fgets(STDIN));
    }
    for($i=0;$i<$m;$i++) {
      $arrT[] = trim(fgets(STDIN));
    }
    for($i=0;$i<$n;$i++) {
      for($j=0;$j<$m;$j++) {
        if(substr($arrS[$i]) === $arrT[$j]) {
          $count++;
        }
      }
    }
    echo $count;
?>