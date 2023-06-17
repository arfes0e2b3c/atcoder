<?php

$arr = explode(' ', trim(fgets(STDIN)));

$sum = '';
$is_huge = false;
foreach ($arr as $key => $value) {
  if($key == 63 && $value == 1) {
    $is_huge = true;
    $sum = '0' . $sum;
    break;
  }
  $sum = $value . $sum;
}
$answer = bindec($sum);

if($is_huge) {
  // [1の位の値, 10の位の値, ...] と並んだ配列にする
  $aNumList = array_reverse(str_split((string)$answer));
  $bNumList = array_reverse(str_split((string)PHP_INT_MAX));
  // ループ回数を決定する
  $maxLoop = max(count($aNumList), count($bNumList));

  $carry  = 0;// 繰り上がり
  $result = [];// 計算結果を格納
  // 各位の数字を一つずつ計算する
  for($i = 0; $i < $maxLoop; $i++) {
      // 今参照している位の値と繰り上がりを足し合わせる
      if($i == 0) {
        $sum        = (int)($aNumList[$i] ?? 0) + (int)($bNumList[$i] ?? 0) + $carry + 1;
      }else{
        $sum        = (int)($aNumList[$i] ?? 0) + (int)($bNumList[$i] ?? 0) + $carry;
      }
      // 足し合わせた結果を [1の位の値, 10の位の値, ...] と並んだ配列にする
      $sumStr     = array_reverse(str_split((string)$sum));
      // このループの位の足し合わせの結果の 1 の位はそのまま最終結果に格納
      $result[$i] = $sumStr[0];
      // 10 の位は次ループの繰り上がり
      $carry      = $sumStr[1] ?? 0;
  }
  // 最後に繰り上がりが残っていた場合、それを付け足し
  if($carry) {
      $result[] = $carry;
  }

  // 全て連結する。ここで int にして返そうとして int 限界を超えると誤差が現れて台無しになる
  echo implode("", array_reverse($result)) . PHP_EOL;
}else{
  echo $answer . PHP_EOL;
}