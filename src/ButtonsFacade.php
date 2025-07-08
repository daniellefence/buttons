<?php

namespace Daniellefence\Buttons;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Daniellefence\Buttons\Skeleton\SkeletonClass
 */
class ButtonsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'buttons';
    }
}
