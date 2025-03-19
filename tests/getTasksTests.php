<?php

namespace FlowUp\Test;

use FlowUp\Unitaire\TaskManager;
use FlowUp\Unitaire\OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class GetTasksTest extends TestCase
{
    public function testGetTasks()
    {
        $taskManager = new TaskManager();
        $taskManager->addTask('Task 1');
        $taskManager->addTask('Task 2');

        $tasks = $taskManager->getTasks();
        
        $this->assertCount(2, $tasks);
        $this->assertEquals('Task 1', $tasks[0]);
        $this->assertEquals('Task 2', $tasks[1]);
    }
}