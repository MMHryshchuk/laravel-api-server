<?php
/**
 * Created by PhpStorm.
 * User: mmhryshchuk
 * Date: 07.03.18
 * Time: 12:35
 */

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            \App\Repositories\Contracts\TaskContract::class,
            \App\Repositories\TaskRepository::class
        );
    }
}