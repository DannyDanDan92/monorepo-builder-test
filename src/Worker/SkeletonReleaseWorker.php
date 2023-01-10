<?php

namespace App\Test;

use PharIo\Version\Version;
use Symplify\MonorepoBuilder\Release\Contract\ReleaseWorker\ReleaseWorkerInterface;

class SkeletonReleaseWorker implements ReleaseWorkerInterface
{
    public function getDescription(Version $version): string
    {
        return '';
    }

    public function work(Version $version): void
    {
    }
}
