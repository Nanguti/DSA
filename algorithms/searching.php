<?php

// 1. Pattern Searching
// Real-World Example: Text editors (searching for substrings).

function searchPattern($text, $pattern)
{
    $pos = strpos($text, $pattern);
    echo $pos !== false ? "Pattern found at position $pos\n" : "Pattern not found\n";
}

searchPattern("hello world", "world");
searchPattern("hello world", "php");
