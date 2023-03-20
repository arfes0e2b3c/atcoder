<?php

[$n, $k] = explode(' ', fgets(STDIN));
for($i=0;$i<$k;$i++) {
  $arr[] = trim(fgets(STDIN));
}
usort($arr, "strcmp");
for($i=0;$i<$k;$i++) {
  echo $arr[$i] . PHP_EOL;
}
