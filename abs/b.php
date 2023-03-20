<?php

$a = trim(fgets(STDIN));

$sum = 0;
$sum += $a[0] === 1 ? 1 : 0;
$sum += $b[1] === 1 ? 1 : 0;
$sum += $c[2] === 1 ? 1 : 0;

echo $sum;