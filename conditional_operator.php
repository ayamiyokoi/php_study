<?php

function sum($a, $b, $c) 
{
  $total = $a + $b + $c;
  
  // if ($total < 0) {
  //   return 0;
  // } else {
  //   return $total;
  // }
  return $total < 0 ? 0 : $total;
}

echo sum(100, 300, 500) . PHP_EOL; // 900
echo sum(-1000, 300, 500) . PHP_EOL; // 0