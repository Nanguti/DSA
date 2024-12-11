<?php

// 5. Array
// Explanation: A collection of elements identified by indices.
// Real-World Example: Leaderboards in games.
// Interview Example: Find the second largest element in an array.

$array = [40, 20, 30, 10, 50];
$sorted = asort($array);
echo $sorted;
echo "Second largest: " . $array[count($array) - 2] . "\n";
