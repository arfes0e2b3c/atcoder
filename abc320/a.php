<?php

[$a, $b] = explode(' ', trim(fgets(STDIN)));
echo $a**$b + $b**$a . PHP_EOL;