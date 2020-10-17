<?php

class Task {
    public $description;

    public $completed = false;

    public function __construct($description)
    {
        var_dump($description);
    }
}

$task = new Task('Learn OOP', 'The teacher');

$task->complete();

var_dump($task->completed);