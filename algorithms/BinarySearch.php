<?php
// 3. Searching
// Explanation: Algorithms to find elements in a data structure.
// Real-World Example: Searching a contact in your phone book.

function binarySearch($arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($arr[$mid] == $target) {
            return $mid;
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return -1;
}

$array = [1, 3, 5, 7, 9, 11];
echo "Found at index: " . binarySearch($array, 7) . "\n";
echo "Found at index: " . binarySearch($array, 4) . "\n";
