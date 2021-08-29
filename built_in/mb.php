<?php

$input = ' こんにちは  ';
$input = trim($input);

echo mb_strlen($input) . PHP_EOL; // 5
echo mb_strpos($input, 'に') . PHP_EOL; // 2

$input = str_replace('にち', 'ばん', $input); // こんばんは
echo $input . PHP_EOL;