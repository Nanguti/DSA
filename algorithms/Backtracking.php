<?php

// 8. Backtracking
// Explanation: A brute-force algorithm to explore all possible solutions by trying and removing choices.
// Real-World Example: Solving puzzles like Sudoku.
// Interview Example: Solve the N-Queens problem.

function solveNQueens($board, $row, $n)
{
    if ($row == $n) {
        printBoard($board);
        echo "\n";
        return;
    }

    for ($col = 0; $col < $n; $col++) {
        if (isSafe($board, $row, $col, $n)) {
            $board[$row][$col] = 1;
            solveNQueens($board, $row + 1, $n);
            $board[$row][$col] = 0; // backtrack
        }
    }
}

function isSafe($board, $row, $col, $n)
{
    for ($i = 0; $i < $row; $i++) {
        if ($board[$i][$col] == 1) return false;
    }
    for ($i = $row, $j = $col; $i >= 0 && $j >= 0; $i--, $j--) {
        if ($board[$i][$j] == 1) return false;
    }
    for ($i = $row, $j = $col; $i >= 0 && $j < $n; $i--, $j++) {
        if ($board[$i][$j] == 1) return false;
    }
    return true;
}

function printBoard($board)
{
    foreach ($board as $row) {
        echo implode(" ", $row) . "\n";
    }
}

$n = 4;
$board = array_fill(0, $n, array_fill(0, $n, 0));
solveNQueens($board, 0, $n);
