<?php

namespace App\Providers;

use App\Http\Livewire\Pages;
use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use App\Models\Page;

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
        view()->share('pages_all', Page::all());

    }
}
