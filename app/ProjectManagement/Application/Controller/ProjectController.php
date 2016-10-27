<?php

namespace Company\ProjectManagement\Application\Controller;

use Phprest\Response;
use Phprest\Util\Controller;
use Phprest\Annotation as Phprest;
use Company\ProjectManagement\DomainModel\Task;
use Company\ProjectManagement\DomainModel\Project;

class ProjectController extends Controller
{
    /**
     * @Phprest\Route(method="GET", path="/projects")
     *
     * @return Response\Ok
     */
    public function getAll()
    {
        $projects = [
            new Project('test project 1', [new Task('task 1')]),
            new Project('test project 2', []),
            new Project('test project 3', [])
        ];

        return new Response\Ok($projects);
    }
}
