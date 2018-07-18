<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\Route;
use App\Models\Route;
use Illuminate\Support\Facades\DB;

class RoutesTableSeeder extends Seeder
{
    const SystemAdmin = 'SYSADMIN';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\RoleRoute::truncate();
        \Illuminate\Support\Facades\DB::table('routes')->delete();
        $admin = Role::where('code', self::SystemAdmin)->first();

//        #### Dashboard
        $dashboard = new Route();
        $dashboard->route_name = 'Dashboard';
        $dashboard->icon = 'fa-dashboard';
        $dashboard->sequence = 1;
        $dashboard->save();
        $dashboard_id = $dashboard->id;

        #### Dashboard child
        $analytics_dash = new Route();
        $analytics_dash->route_name = 'Analytics Dashboard';
        $analytics_dash->url = 'home';
        $analytics_dash->parent_route = $dashboard_id;
        $analytics_dash->save();
        $analytics_dash->roles()->attach($admin);


        #### configurations
        $configurations = Route::create([
            'route_name'=>"Events",
            'url'=> '#',
            'icon'=> 'fa-volume-up',
            'sequence'=>3
        ]);

        $cChild = Route::create([
            'route_name'=> 'All Events',
            'parent_route'=> $configurations->id,
            'url'=>'events',
        ]);
        $cChild->roles()->attach($admin);


        #### user management
        $user_mngt = new Route();
        $user_mngt->route_name = 'User Manager';
        $user_mngt->icon = 'fa-user';
        $user_mngt->sequence = 6;
        $user_mngt->save();
        $user_mngt_id = $user_mngt->id;
//
        #### user management children
        $all_user = new Route();
        $all_user->route_name = 'System Users';
        $all_user->url = 'users';
        $all_user->parent_route = $user_mngt_id;
        $all_user->save();
        $all_user->roles()->attach($admin);

        $roles = new Route();
        $roles->route_name = 'User Roles';
        $roles->url = 'roles';
        $roles->parent_route = $user_mngt_id;
        $roles->save();
        $roles->roles()->attach($admin);

        //tenant route
        $roles = new Route();
        $roles->route_name = 'Tenants';
        $roles->url = 'tenants';
        $roles->parent_route = $user_mngt_id;
        $roles->save();
        $roles->roles()->attach($admin);
//
//////        #### system
//        $system = new Route();
//        $system->route_name = 'System Settings';
//        $system->icon = 'fa-cogs';
//        $system->sequence = 7;
//        $system->save();
//        $system_id = $system->id;
//
//        #### system children
//        $routes = new Route();
//        $routes->route_name = 'System Routes';
//        $routes->url = 'routes';
//        $routes->parent_route = $system_id;
//        $routes->save();
//        $routes->roles()->attach($admin);
    }
}
