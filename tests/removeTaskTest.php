<?php

namespace FlowUp\Test;

use FlowUp\Unitaire\TaskManager;
use FlowUp\Unitaire\OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class RemoveTaskTest extends TestCase
{
    public function testRemoveTask()
    {
        print("Test RemoveTask\n");
        $taskManager = new TaskManager();
        $taskManager->addTask('Lalala');
        $taskManager->removeTask(0);
        $this->assertCount(0, $taskManager->getTasks());
    }
}