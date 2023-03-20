<?php

fscanf(STDIN, '%d %d', $a, $b);

echo $a % 2 === 0 || $b % 2 === 0 ? 'Even' : 'Odd';