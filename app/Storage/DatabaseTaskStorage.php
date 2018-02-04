<?php
namespace Todo\Storage;
use Todo\Model\Task;

interface TaskStorageInterface
{
    public function get($id);
    public function store(Task $task);
}

class DatabaseTaskStorage implements TaskStorageInterface
{
    public function get($id)
    {

    }

    public function store (Task $task)
    {

    }
}