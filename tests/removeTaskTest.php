<?php

namespace FlowUp\Test;

use FlowUp\Unitaire\TaskManager;
use FlowUp\Unitaire\OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class RemoveTaskTest extends TestCase
{
    public function testRemoveTask()
    {
        $taskManager = new TaskManager();
        $taskManager->addTask('Lalala');
        $taskManager->removeTask(0);
        $this->assertCount(0, $taskManager->getTasks());
    }
}