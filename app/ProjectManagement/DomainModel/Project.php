<?php

namespace Company\ProjectManagement\DomainModel;

class Project
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Task[]
     */
    private $tasks = [];

    /**
     * @param string $name
     * @param Task[] $tasks
     */
    public function __construct($name, array $tasks)
    {
        $this->name     = $name;
        $this->tasks    = $tasks;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Task[]
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * @param Task $task
     */
    public function addTask(Task $task) {
        $this->tasks[] = $task;
    }
}
