<?php

[$n, $m, $p] = explode(' ', trim(fgets(STDIN)));
echo (floor(($n - $m) / $p) + 1) . PHP_EOL;