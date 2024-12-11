<?php
// 5. Bitwise
// Explanation: Operations that work on binary representations of numbers.
// Real-World Example: Compression algorithms or cryptography.
// Interview Example: Find the single number in an array where every other number appears twice.

function findSingleNumber($arr)
{
    $result = 0;
    foreach ($arr as $num) {
        $result ^= $num; // XOR cancels out duplicates
    }
    return $result;
}

$array = [1, 2, 3, 2, 1];
echo "Single number is: " . findSingleNumber($array) . "\n";
