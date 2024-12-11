<?php
// 2. Matrix/Grid
// Explanation: A two-dimensional array representing elements in rows and columns.
// Real-World Example: Game boards like Sudoku or Minesweeper.
// Interview Example: Find the number of islands in a binary matrix.


$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($matrix as $row) {
    echo implode(" ", $row) . "\n";
}
