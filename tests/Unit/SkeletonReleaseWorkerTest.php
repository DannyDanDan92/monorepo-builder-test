<?php

namespace App\Tests;

use App\Worker\SkeletonReleaseWorker;
use PHPUnit\Framework\TestCase;

class SkeletonReleaseWorkerTest extends TestCase
{
    protected function setUp(): void
    {
        $this->instance = new SkeletonReleaseWorker();
    }

    public function testUpdateVersionDescription()
    {
    }
}
