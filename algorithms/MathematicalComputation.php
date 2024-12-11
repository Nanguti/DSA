<?php

// 9. Mathematical
// Explanation: Algorithms based on mathematical computations.
// Real-World Example: Calculating the greatest common divisor (GCD).
// Interview Example: Check if a number is prime.

function isPrime($n)
{
    if ($n <= 1) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

echo isPrime(11) ? "Prime\n" : "Not Prime\n";
