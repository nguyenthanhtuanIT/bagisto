<?php
namespace GG\Admin\Providers;

use Illuminate\Support\ServiceProvider;

/**
* HelloWorld service provider
*
* @author    Jane Doe <janedoe@gmail.com>
* @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
*/
class AdminServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/admin-routes.php');
    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {

    }
}