<?php

$rate = 1.1; // グローバルスコープ

function sum($a, $b, $c)
{
  // global $rate;
  $rate = 1.08; // ローカルスコープ
  return ($a + $b + $c) * $rate;
}

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1944