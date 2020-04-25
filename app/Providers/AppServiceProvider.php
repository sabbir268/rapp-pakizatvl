<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Content;
use App\WeBeliveIn;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $WeBeliveIn = WeBeliveIn::where('id','1')->first();
        $products = Content::where('type','products')->orWhere('type','solutions')->where('status',1)->get();
        $AllContents = Content::get();
        $AllAbout = Content::where('type','about')->get();
        view()->share('WeBeliveIn', $WeBeliveIn);
        view()->share('products', $products);
        view()->share('AllContents', $AllContents);
        view()->share('AllAbout', $AllAbout);
        Schema::defaultStringLength(191);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
