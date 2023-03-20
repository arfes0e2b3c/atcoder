<?php

[$n, $k] = explode(' ', trim(fgets(STDIN)));
$arrA = explode(' ', trim(fgets(STDIN)));
$q = trim(fgets(STDIN));
$strAns = [];
//q回受け取る
while(fscanf(STDIN, "%d %d", $l, $r)) {
  $arrQ = array_slice($arrA, $l - 1, $r - $l + 1);
  //$k個のグループに分けて合計を計算
  $arrS = [];
  for($j=0;$j<$k;$j++) {
    $arrS[] = array_sum(array_map('current', array_chunk(array_slice($arrQ, $j), $k)));
    if($j > 0 && $arrS[0] !== $arrS[$j]){
      $strAns[] = "No";
      break;
    }
  }
  if(count(array_unique($arrS)) === 1) {
    $strAns[] = "Yes" ;
  }
}
echo implode("\n", $strAns);
