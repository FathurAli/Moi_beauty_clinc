<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Menu;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
{
    View::composer('*', function ($view) {
        $menuItems = Menu::whereNull('parent_id')
            ->with('children')
            ->orderBy('order')
            ->get()
            ->toArray();

        $view->with('menuItems', $menuItems);
    });
}
    
}
