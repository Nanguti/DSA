<?php

// 4. Sorting
// Explanation: Algorithms to arrange elements in a specific order.
// Real-World Example: Sorting product prices in an e-commerce store.

function quickSort($arr)
{
    if (count($arr) < 2) {
        return $arr;
    }

    $pivot = $arr[0];
    $left = array_filter(
        array_slice($arr, 1),
        fn($x) => $x <= $pivot
    );
    $right = array_filter(
        array_slice($arr, 1),
        fn($x) => $x > $pivot
    );

    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

$array = [10, 5, 2, 3, 8, 4, 1];
print_r(quickSort($array));
