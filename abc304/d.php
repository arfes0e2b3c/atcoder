<?php

[$w, $h] = explode(' ', trim(fgets(STDIN)));
$n = trim(fgets(STDIN));
for ($i=0; $i < $n; $i++) { 
  $line = explode(' ', trim(fgets(STDIN)));
  $strawberrys[] = $line;
}


$a_num = trim(fgets(STDIN));
$a_lines = explode(' ', trim(fgets(STDIN)));

$b_num = trim(fgets(STDIN));
$b_lines = explode(' ', trim(fgets(STDIN)));

$min = 0;
$max = $n;

