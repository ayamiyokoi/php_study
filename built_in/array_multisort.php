<?php
// array_mutisort()を使って複雑な配列をソートする方法をコードを書いて見ていきます。
// array_multisort()

$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

$scores = array_column($data, 'score');
$names = array_column($data, 'name');

// print_r($scores);
// print_r($names);

// array_multisort(
//   $scores,
//   $names,
//   $data
// );

array_multisort(
  $scores, SORT_DESC, SORT_NUMERIC,
  $names, SORT_DESC, SORT_STRING,
  $data
);

print_r($data);