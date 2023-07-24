<?php

[$n, $t, $m] = trim(fgets(STDIN));
$arr = [];
while($line = trim(fgets(STDIN))) {
  $line = explode(' ', $line);
  $arr[] = $line;
}

