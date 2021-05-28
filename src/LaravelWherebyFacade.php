<?php

namespace Kraenkvisuell\LaravelWhereby;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kraenkvisuell\LaravelWhereby\Skeleton\SkeletonClass
 */
class LaravelWherebyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-whereby';
    }
}
