<?php

$n = (int) fgets(STDIN);
for($i=1;$i<=$n;$i++) {
  echo array_sum(explode(' ',trim(fgets(STDIN)))) . PHP_EOL;
}
