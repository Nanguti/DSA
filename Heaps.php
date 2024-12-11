<?php

// 7. Heap
// Explanation: A complete binary tree where elements follow a heap property (min-heap or max-heap).
// Real-World Example: Priority queues (e.g., scheduling tasks).
// Interview Example: Find the Kth largest element in an array.

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
