<?php

$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B  ', 8, 8);

$date = substr($input, 0, 8);
$product = substr($input, 8, 8);
// $amount = substr($input, 16, 4);
$amount = substr($input, 16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
// echo $amount . PHP_EOL;
echo number_format($amount) . PHP_EOL;

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';

// preg_match($pattern, $input, $matches);
// preg_match_all($pattern, $input, $matches);
// print_r($matches);

$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;

//$d = [2020, 11, 15];
//echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
//echo implode('-', $d) . PHP_EOL;

$t = '17:32:45';
print_r(explode(':', $t));

$n = 5.6283;

// echo ceil($n) . PHP_EOL; // 6
// echo floor($n) . PHP_EOL; // 5
// echo round($n) . PHP_EOL; // 6
// echo round($n, 2) . PHP_EOL; // 5.63

// echo mt_rand(1, 6) . PHP_EOL;

// echo max(3, 9, 4) .PHP_EOL;
// echo min(3, 9, 4) .PHP_EOL;

echo M_PI . PHP_EOL;
echo M_SQRT2 . PHP_EOL;

$scores = [30, 40, 50];

// array_unshift($scores, 10, 20);
// array_push($scores, 60, 70);
// $scores[] = 80;
// array_shift($scores);
array_pop($scores);

print_r($scores);