<!-- 1. Linked List
Explanation: Linked lists are linear data structures where elements (nodes) are connected via pointers.
Real-World Example: Browser history (backward and forward navigation).
Interview Example: Reverse a linked list. -->

<?php

class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList
{
    public $head = null;

    public function insert($data)
    {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function display()
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " -> ";
            $current = $current->next;
        }
        echo "null\n";
    }
}

// Example usage
$list = new LinkedList();
$list->insert(10);
$list->insert(20);
$list->insert(30);
$list->display();
