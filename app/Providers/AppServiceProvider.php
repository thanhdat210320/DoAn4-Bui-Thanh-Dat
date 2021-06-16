<?php

namespace App\Providers;

use App\Model\Category as ModelCategory;
use Illuminate\Support\ServiceProvider;
use App\Model\Category;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('master',function($view)
        {
            $loai_sp= Category::all();
            $view->with('loaisanpham',$loai_sp);
        });
    }
}
