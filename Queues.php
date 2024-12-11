<?php
# 3. Queue
# Explanation: First In First Out (FIFO) data structure.
# Real-World Example: Ticketing systems.
# Interview Example: Implement a queue using two stacks. 
class Queue
{
    private $queue = [];

    public function enqueue($item)
    {
        array_push($this->queue, $item);
    }

    public function dequeue()
    {
        return array_shift($this->queue);
    }

    public function display()
    {
        echo implode(" <- ", $this->queue) . "\n";
    }
}

// Example usage
$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->display();
$queue->dequeue();
$queue->display();
