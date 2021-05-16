<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Menu;
use Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menus = array();
        $pmenus = Menu::where('pid', 2)->orderBy('order_num', 'asc')->get();
        foreach( $pmenus as $pmenu ) {
            $new_pmenu = Menu::get_children($pmenu);
            array_push($menus, $new_pmenu);
        }
        View::share('menus', $menus);

        $admin_menus = array();
        $admin_pmenus = Menu::where('pid', 1)->get();
        foreach( $admin_pmenus as $admin_pmenu ) {
            $new_admin_pmenu = Menu::get_children($admin_pmenu);
            array_push($admin_menus, $new_admin_pmenu);
        }
        View::share('admin_menus', $admin_menus);

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
