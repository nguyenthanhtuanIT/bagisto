<?php
namespace GG\Product\Providers;

use Illuminate\Support\ServiceProvider;

/**
* Product service provider
*/
class ProductServiceProvider extends ServiceProvider
{
   /**
   * Bootstrap services.
   *
   * @return void
   */
   public function boot()
   {
        include __DIR__ . '/../Http/routes.php';
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'product');
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'product');
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