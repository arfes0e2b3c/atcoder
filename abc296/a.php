<?php

$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));
$s = str_split($s);
$stack = '';
foreach ($s as $gender) {
  if($gender == $stack) {
    echo 'No';
    return;
  }
  $stack = $gender;
}
echo 'Yes';