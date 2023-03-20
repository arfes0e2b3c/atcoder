<?php

$n = fgets(STDIN);
$arr = explode(' ', fgets(STDIN));

foreach ($arr as $value) {
  if($value % 2 === 0) echo $value . ' ';
}