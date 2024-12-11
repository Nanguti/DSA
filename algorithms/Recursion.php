<?php

// 7. Recursion
// Explanation: A function that calls itself to solve smaller instances of a problem.
// Real-World Example: Directory traversal in a file system.
// Interview Example: Calculate the factorial of a number.

function factorial($n)
{
    if ($n == 0) return 1;
    return $n * factorial($n - 1);
}

echo "Factorial of 5: " . factorial(5) . "\n";
