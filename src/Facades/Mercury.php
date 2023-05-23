<?php

namespace EzeeSpace\Mercury\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \EzeeSpace\Mercury\Mercury
 */
class Mercury extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \EzeeSpace\Mercury\Mercury::class;
    }
}
