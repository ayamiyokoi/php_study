$a = [3, 4, 8];
$b = [4, 8, 12];

// $merged = array_merge($a, $b);
// $merged = [...$a, ...$b];
// print_r($merged);

// $uniques = array_unique($merged);
// print_r($uniques);

$diff1 = array_diff($a, $b);
print_r($diff1); // [3]

$diff2 = array_diff($b, $a);
print_r($diff2); // [12]

$common = array_intersect($a, $b);
print_r($common); // [4, 8]