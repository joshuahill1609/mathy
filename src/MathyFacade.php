<?php

namespace jjh\Mathy;

use \Illuminate\Support\Facades\Facade;

class MathyFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return Mathy::class;
    }
}
