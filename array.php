<?php

// $score1 = 90;
// $score2 = 40;
// $score3 = 100;

$scores = [
  90,
  40,
  100,
];

$scores[1] = 60;
echo $scores[1] . PHP_EOL;


$scores = [
  'first'  => 90, 
  'second' => 40, 
  'third'  => 100,
];

// var_dump($scores);
// print_r($scores);

echo $scores['third'] . PHP_EOL;

$scores = [
  'first'  => 90, 
  'second' => 40, 
  'third'  => 100,
];

// foreach ($scores as $value) {
// foreach ($scores as $score) {
//   echo $score . PHP_EOL;
// }

foreach ($scores as $key => $score) {
  echo $key . ' - ' . $score . PHP_EOL;
}


$moreScores = [
  55,
  72,
  'perfect',
  [90, 42, 88],
];

$scores = [
  90,
  40,
  ...$moreScores,
  100,
];


// function sum($a, $b, $c)
function sum(...$numbers)
{
  // return $a + $b + $c;
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo sum(1, 3, 5) . PHP_EOL;
echo sum(4, 2, 5, 1) . PHP_EOL;

function getStats(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total / count($numbers)];
}

// print_r(getStats(1, 3, 5));

// list($sum, $average) = getStats(1, 3, 5);
[$sum, $average] = getStats(1, 3, 5);

echo $sum . PHP_EOL;
echo $average . PHP_EOL;