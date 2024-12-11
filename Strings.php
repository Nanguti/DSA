<?php

// 9. String
// Explanation: A sequence of characters often used to store text.
// Real-World Example: Manipulating text in a CMS or validating input.
// Interview Example: Check if a string is a palindrome.

function isPalindrome($string)
{
    return $string === strrev($string);
}

echo isPalindrome("racecar") ? "Palindrome\n" : "Not Palindrome\n";
echo isPalindrome("hello") ? "Palindrome\n" : "Not Palindrome\n";
