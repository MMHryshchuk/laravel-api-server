<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 07.03.18
 * Time: 11:45
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Test extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'payment';
    }

}