<?php
// 4. Stack
// Explanation: Last In First Out (LIFO) data structure.
// Real-World Example: Undo functionality in text editors.
// Interview Example: Check if parentheses are balanced.
class Stack
{
    private $stack = [];

    public function push($item)
    {
        array_push($this->stack, $item);
    }

    public function pop()
    {
        return array_pop($this->stack);
    }

    public function display()
    {
        echo implode(" -> ", array_reverse($this->stack)) . "\n";
    }
}

// Example usage
$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->display();
$stack->pop();
$stack->display();
