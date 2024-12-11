<?php
// 10. Dynamic Programming
// Explanation: Solving problems by breaking them into overlapping subproblems and storing results.
// Real-World Example: Finding the shortest path in maps.
// Interview Example: Find the longest increasing subsequence.

function longestIncreasingSubsequence($arr)
{
    $n = count($arr);
    $lis = array_fill(0, $n, 1);

    for ($i = 1; $i < $n; $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$i] > $arr[$j] && $lis[$i] < $lis[$j] + 1) {
                $lis[$i] = $lis[$j] + 1;
            }
        }
    }

    return max($lis);
}

$array = [10, 22, 9, 33, 21, 50, 41, 60];
echo "Length of LIS: " . longestIncreasingSubsequence($array) . "\n";
