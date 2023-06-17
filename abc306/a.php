<?php

$n = fgets(STDIN);
$s = str_split(fgets(STDIN));

foreach ($s as $value) {
  echo $value . $value;
}