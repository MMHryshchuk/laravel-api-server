<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 07.03.18
 * Time: 11:47
 */

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use PayTest\Payment;

class TestServiceProvider extends ServiceProvider
{

    public function register()
    {
        App::bind('payment', function()
        {
            return new Payment;
        });
    }

}