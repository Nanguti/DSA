<?php
// 6. Greedy
// Explanation: An algorithm that makes locally optimal choices at each step.
// Real-World Example: Selecting activities in a schedule without overlap.
// Interview Example: Find the minimum number of coins to make change.

function coinChange($coins, $amount)
{
    sort($coins);
    $count = 0;

    for ($i = count($coins) - 1; $i >= 0; $i--) {
        while ($amount >= $coins[$i]) {
            $amount -= $coins[$i];
            $count++;
        }
    }

    return $amount == 0 ? $count : -1;
}

$coins = [1, 2, 5];
echo "Coins needed: " . coinChange($coins, 11) . "\n";
