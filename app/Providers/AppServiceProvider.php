<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\RoleRoute;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\Route as SystemRoutes;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        //
        Schema::defaultStringLength(191);

//        if(env('APP_ENV') !== 'local'){
//            $url->forceScheme('https');
//        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer(['layouts.partials.sidebar'], function($view) {
            $menu = [];
            $authorizedRoutes =[];
            $role = Auth::user()->role_id;
            $role_routes = RoleRoute::where('role_id',$role)
                ->pluck('route_id')
                ->toArray();
            if(count($role_routes)){
                $all_routes = SystemRoutes::all();
                $menus = $all_routes->wherein('id',$role_routes);
//                    print_r($menus);die();
                if(count($menus)){
                    $parent_menus_all = $menus->pluck('parent_route')->toArray();
                    $parent_menus = array_unique($parent_menus_all);
                    $whole_object = [];
//                    print_r();die();
                    $count = 101;
                    foreach ($parent_menus as $parent_menu){
                        $children = $menus->where('parent_route',$parent_menu)->toArray();
//                        var_dump($children);die();
                        $children_obj = [];
                        foreach ($children as $child){
                            $children_obj[] =(object)[
                                'title'=>$child['route_name'],
                                'url'=>$child['url'],

                            ];
                            $authorizedRoutes[]= $child['url'];
                        }
                        $pmenu = $all_routes->find($parent_menu)->toArray();
//                        print_r($pmenu);die;
                        $whole_object[] = (object)[
                            'title'=>$pmenu['route_name'],
                            'icon'=>$pmenu['icon'],
                            'url'=>'#',
                            'id'=>'idA'.$count,
                            'parent'=>true,
                            'children'=>$children_obj
                        ];
//                            print_r($whole_object);die();
                        $count++;
                    }
                    $menu = $whole_object;
//                    Session::put('menu',$menu);
                }
            }
            Session::put('routes',null);
            Session::put('routes',$authorizedRoutes);

            $view->with('menu', $menu)->with('current_route', Route::current());
        });
    }
}
