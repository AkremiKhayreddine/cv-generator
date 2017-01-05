<?php


namespace hk\cv;

use Illuminate\Support\Facades\Facade;

class CvFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'hk-cv';
    }
}