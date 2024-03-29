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

namespace Konceiver\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'skeleton';
    }
}
