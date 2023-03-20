<?php

$a = trim(fgets(STDIN));
[$b, $c] = explode(' ', trim(fgets(STDIN)));
$s = trim(fgets(STDIN));

$answer = ($a + $b + $c) . ' ' . $s;
echo $answer;