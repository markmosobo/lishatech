<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route as RouteDetails;


class LoadMenus extends Controller
{

    public function loadSideMenuOld($parent_id){
        $menus = (is_null($parent_id) || empty($parent_id)) ?  Menu::whereNull('parent_menu')->where([['menu_status', '=', 1]])->orderBy('sequence', 'asc')->get() : Menu::where([['parent_menu', '=', $parent_id], ['menu_status', '=', 1]])->orderBy('sequence', 'asc')->get();
//        print_r($menus);die();
        $route_name = RouteDetails::getFacadeRoot()->current()->uri();

        if(count($menus)) {
//            echo '<ul>';

            foreach ($menus as $menu) {
                $route = Route::find($menu->route_id);
                $url = (is_null($parent_id)) ? '#' : $route->url;
                $li_class = (is_null($parent_id)) ? 'treeview': '';
                $parent_class = "treeview";
                $child_class = "";
                $lip_active = ($route_name == $url) ? 'active open': '';
                $user = Auth::user();

                // get user role
                $roles = DB::table('role_user')->where('user_id', $user->id)->get();
                $the_roles = [];
                if(count($roles)){
                    foreach ($roles as $role){
                        // get user roles
                        $the_roles[] = $role->role_id;
                    }
                }
                $allocated_routes = [];
                $allocated_route_ids = [];
                $the_user_routes = DB::table('role_route')->whereIn('role_id', $the_roles)->get();
//                print_r($the_user_routes);exit;
                if(count($the_user_routes)) {
                    foreach ($the_user_routes as $alloc_route) {
                        $allocated_routes[] = Route::find($alloc_route->route_id)->route_name;
                        $allocated_route_ids[] = $alloc_route->route_id;
                    }
                }

//                print_r($allocated_routes);exit;
                $allocated_parents = $this->getAllocatedParentRoutes($allocated_route_ids);
//                print_r($allocated_parents);exit;
                if(!is_null($parent_id)) {
                    if (in_array($route->route_name, $allocated_routes)) {
                        echo '<li class="' . $child_class . ' ' . $lip_active . '">';

                        echo '<a href="' . url($url) . '" title="' . $route->route_name . '"><i class="fa fa-angle-double-right"></i>';
                        echo (!empty($menu->fa_icon)) ? '<i class="fa ' . $menu->fa_icon . ' text-yellow"></i> ' : '';
//                        echo '<span class="menu-item-parent">';
                        echo $route->route_name . '</span></a>';

                        $this->loadSideMenu($menu->id);
                        echo '</li>';
                    }
                }else{
                    if(in_array($route->id, $allocated_parents)){

                        echo '<li class="' . $parent_class . ' ' . $lip_active . '">';

                        echo '<a href="' . url($url) . '" title="' . $route->route_name . '">';
                        echo (!empty($menu->fa_icon)) ? '<i class="fa ' . $menu->fa_icon . ' text-yellow"></i> ' : '';
                        echo '<span>';
                        echo $route->route_name . '</span><span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                              </span></a>';
                        echo '<ul class="treeview-menu " style="display: none;">';
                        $this->loadSideMenu($menu->id);
                        echo '</ul>';
                        echo '</li>';
                    }
                }
            }

//            echo '</ul>';
        }
    }

    public function loadSideMenu($parent_id){
        $menus = (is_null($parent_id) || empty($parent_id)) ?  Route::whereNull('parent_menu')->where([['menu_status', '=', 1]])->orderBy('sequence', 'asc')->get() : Menu::where([['parent_menu', '=', $parent_id], ['menu_status', '=', 1]])->orderBy('sequence', 'asc')->get();
//        print_r($menus);die();
        $route_name = RouteDetails::getFacadeRoot()->current()->uri();

        if(count($menus)) {
//            echo '<ul>';

            foreach ($menus as $menu) {
                $route = Route::find($menu->route_id);
                $url = (is_null($parent_id)) ? '#' : $route->url;
                $li_class = (is_null($parent_id)) ? 'treeview': '';
                $parent_class = "treeview";
                $child_class = "";
                $lip_active = ($route_name == $url) ? 'active open': '';
                $user = Auth::user();

                // get user role
                $roles = DB::table('role_user')->where('user_id', $user->id)->get();
                $the_roles = [];
                if(count($roles)){
                    foreach ($roles as $role){
                        // get user roles
                        $the_roles[] = $role->role_id;
                    }
                }
                $allocated_routes = [];
                $allocated_route_ids = [];
                $the_user_routes = DB::table('role_route')->whereIn('role_id', $the_roles)->get();
//                print_r($the_user_routes);exit;
                if(count($the_user_routes)) {
                    foreach ($the_user_routes as $alloc_route) {
                        $allocated_routes[] = Route::find($alloc_route->route_id)->route_name;
                        $allocated_route_ids[] = $alloc_route->route_id;
                    }
                }

//                print_r($allocated_routes);exit;
                $allocated_parents = $this->getAllocatedParentRoutes($allocated_route_ids);
//                print_r($allocated_parents);exit;
                if(!is_null($parent_id)) {
                    if (in_array($route->route_name, $allocated_routes)) {
                        echo '<li class="' . $child_class . ' ' . $lip_active . '">';

                        echo '<a href="' . url($url) . '" title="' . $route->route_name . '"><i class="fa fa-angle-double-right"></i>';
                        echo (!empty($menu->fa_icon)) ? '<i class="fa ' . $menu->fa_icon . ' text-yellow"></i> ' : '';
//                        echo '<span class="menu-item-parent">';
                        echo $route->route_name . '</span></a>';

                        $this->loadSideMenu($menu->id);
                        echo '</li>';
                    }
                }else{
                    if(in_array($route->id, $allocated_parents)){

                        echo '<li class="' . $parent_class . ' ' . $lip_active . '">';

                        echo '<a href="' . url($url) . '" title="' . $route->route_name . '">';
                        echo (!empty($menu->fa_icon)) ? '<i class="fa ' . $menu->fa_icon . ' text-yellow"></i> ' : '';
                        echo '<span>';
                        echo $route->route_name . '</span><span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                              </span></a>';
                        echo '<ul class="treeview-menu " style="display: none;">';
                        $this->loadSideMenu($menu->id);
                        echo '</ul>';
                        echo '</li>';
                    }
                }
            }

//            echo '</ul>';
        }
    }

    public function getAllocatedParentRoutes($child_routes = []){
        $parent_routes = Route::whereIn('id', $child_routes)->get();
        $p_route_id = [];
        if(count($parent_routes)){
            foreach ($parent_routes as $p_route){
                $p_route_id[] = $p_route->parent_route;
            }
        }
        return $p_route_id;
    }
}
