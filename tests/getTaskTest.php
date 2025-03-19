<?php

namespace FlowUp\Test;

use FlowUp\Unitaire\TaskManager;
use FlowUp\Unitaire\OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class GetTaskTest extends TestCase
{
    public function testGetTask()
    {
        print("Test GetTask\n");
        $taskManager = new TaskManager();
        $taskManager->addTask('Task 1');
        $this->assertEquals('Task 1', $taskManager->getTask(0));
    }
}