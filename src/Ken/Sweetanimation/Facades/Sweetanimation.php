<?php

namespace Ken\Sweetanimation\Facades;

use Illuminate\Support\Facades\Facade;

class Sweetanimation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sweet';
    }
}
