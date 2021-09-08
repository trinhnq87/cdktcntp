<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Post;
use App\Category;
use App\GioiThieu;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {        
        Schema::defaultStringLength(191);
        $topPost = Post::where('group',2)->orderBy('id','desc')->take(5)->get();
        View::share('topPost',$topPost);
        $globalCat = Category::orderBy('id','asc')->get();
        View::share('globalCat',$globalCat);
        $gioithieus = GioiThieu::orderBy('id','asc')->get();
        View::share('gioithieus',$gioithieus);
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
