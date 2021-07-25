<?php

declare(strict_types=1);

/*
 * This file is part of Skeleton.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\Skeleton\Tests;

use Illuminate\Contracts\Console\Application;
use Konceiver\Skeleton\Facades\SkeletonFacade;
use Konceiver\Skeleton\SkeletonServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [SkeletonServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['Skeleton' => SkeletonFacade::class];
    }
}
