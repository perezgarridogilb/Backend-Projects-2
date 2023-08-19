<?php
$numbers = [1, 2, 3, 4];

$numbers_by_2 = array_map(function($current) {
    return $current * 2;
}, $numbers);

print_r($numbers_by_2);

echo "\n";
