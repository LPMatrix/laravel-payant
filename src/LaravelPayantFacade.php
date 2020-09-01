<?php

namespace LPMatrix\LaravelPayant;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LPMatrix\LaravelPayant\Skeleton\SkeletonClass
 */
class LaravelPayantFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-payant';
    }
}
