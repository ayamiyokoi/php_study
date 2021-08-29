<?php

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// $keys = array_keys($scores);
// print_r($keys);
// $values = array_values(($scores));
// print_r($values);

// if (array_key_exists('taguchi', $scores) === true) {
//   echo 'taguchi is here!' . PHP_EOL;
// }
// if (in_array(80, $scores) === true) {
//   echo '80 is here!' . PHP_EOL;
// }

echo array_search(70, $scores) . PHP_EOL;