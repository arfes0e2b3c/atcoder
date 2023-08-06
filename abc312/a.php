<?php

$n = trim(fgets(STDIN));

if($n === 'ACE' || $n === 'BDF' || $n === 'CEG' || $n === 'DFA' || $n === 'EGB' || $n === 'FAC' || $n === 'GBD') {
  echo 'Yes' . PHP_EOL;
}else{
  echo 'No' . PHP_EOL;
}