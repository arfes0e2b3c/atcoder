<?php

[$n, $p, $q] = explode(' ', trim(fgets(STDIN)));
$arr_d = explode(' ', trim(fgets(STDIN)));

echo ($p < $q + min($arr_d) ? $p : $q + min($arr_d)) . PHP_EOL;