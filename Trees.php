<?php

// 10. Tree
// Explanation: A hierarchical data structure consisting of nodes, with one root node.
// Real-World Example: File systems, organizational charts.
// Interview Example: Traverse a binary tree in-order.

class TreeNode
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

function inOrder($node)
{
    if ($node !== null) {
        inOrder($node->left);
        echo $node->data . " ";
        inOrder($node->right);
    }
}

// Example usage
$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(3);
$root->left->left = new TreeNode(4);
$root->left->right = new TreeNode(5);

inOrder($root);
