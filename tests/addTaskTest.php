<?php

namespace FlowUp\Test;

use FlowUp\Unitaire\TaskManager;
use FlowUp\Unitaire\OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class AddTaskTest extends TestCase
{
    public function testAddTask()
    {
        $taskManager = new TaskManager();
        $taskManager->addTask('Task 1');
        $this->assertCount(1, $taskManager->getTasks());
        $this->assertEquals('Task 1', $taskManager->getTask(0));
    }
}


