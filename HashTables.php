<?php

// 6. Hash
// Explanation: A hash table stores data in key-value pairs for fast retrieval using a hash function.
// Real-World Example: Storing user credentials or caching.
// Interview Example: Find duplicates in an array using a hash map.

class MinHeap
{
    private $heap = [];

    public function insert($value)
    {
        $this->heap[] = $value;
        $this->heapifyUp();
    }

    private function heapifyUp()
    {
        $index = count($this->heap) - 1;
        while ($index > 0) {
            $parentIndex = intval(($index - 1) / 2);
            if ($this->heap[$index] >= $this->heap[$parentIndex]) break;
            [$this->heap[$index], $this->heap[$parentIndex]] = [
                $this->heap[$parentIndex],
                $this->heap[$index]
            ];
            $index = $parentIndex;
        }
    }

    public function display()
    {
        print_r($this->heap);
    }
}

// Example usage
$heap = new MinHeap();
$heap->insert(5);
$heap->insert(3);
$heap->insert(8);
$heap->display();
