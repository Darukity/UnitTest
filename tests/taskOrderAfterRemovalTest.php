<?php

namespace FlowUp\Test;

use FlowUp\Unitaire\TaskManager;
use FlowUp\Unitaire\OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class TaskOrderAfterRemovalTest extends TestCase
{
    public function testTaskOrderAfterRemoval()
    {
        print("Test TaskOrderAfterRemoval\n");
        $taskManager = new TaskManager();
        $taskManager->addTask('Task 1');
        $taskManager->addTask('Task 2');
        $taskManager->addTask('Task 3');
        $taskManager->removeTask(1);
        $tasks = $taskManager->getTasks();
        $this->assertCount(2, $tasks);
        $this->assertEquals('Task 1', $tasks[0]);
        $this->assertEquals('Task 3', $tasks[1]);
    }
}