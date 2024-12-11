<?php

// 8. Graph
// Explanation: A set of vertices connected by edges, useful for modeling networks.
// Real-World Example: Social media connections, GPS navigation.
// Interview Example: Implement Breadth-First Search (BFS).

class Graph
{
    private $adjList = [];

    public function addEdge($v, $w)
    {
        $this->adjList[$v][] = $w;
    }

    public function bfs($start)
    {
        $visited = [];
        $queue = [$start];

        while (!empty($queue)) {
            $vertex = array_shift($queue);
            if (!in_array($vertex, $visited)) {
                echo "$vertex ";
                $visited[] = $vertex;
                if (isset($this->adjList[$vertex])) {
                    $queue = array_merge($queue, $this->adjList[$vertex]);
                }
            }
        }
    }
}

// Example usage
$graph = new Graph();
$graph->addEdge(0, 1);
$graph->addEdge(0, 2);
$graph->addEdge(1, 2);
$graph->addEdge(2, 0);
$graph->addEdge(2, 3);
$graph->bfs(2);
