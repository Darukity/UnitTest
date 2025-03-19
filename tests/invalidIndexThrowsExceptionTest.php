<?php

namespace FlowUp\Test;

use FlowUp\Unitaire\TaskManager;
use FlowUp\Unitaire\OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class InvalidIndexThrowsExceptionTest extends TestCase
{
    public function testRemoveInvalidIndexThrowsExceptionOnRemove()
    {
        print("Test RemoveInvalidIndexThrowsException on remove\n");
        $this->expectException(\OutOfBoundsException::class);
        $this->expectExceptionMessage("Index de tâche invalide: 0");
        $taskManager = new TaskManager();
        $taskManager->removeTask(0);
    }

    public function testRemoveInvalidIndexThrowsExceptionOnGetTask()
    {
        print("Test RemoveInvalidIndexThrowsException on getTask\n");
        $this->expectException(\OutOfBoundsException::class);
        $this->expectExceptionMessage("Index de tâche invalide: 0");
        $taskManager = new TaskManager();
        $taskManager->getTask(0);
    }
}