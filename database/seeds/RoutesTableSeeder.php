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
            'route_name'=>"Configurations",
            'url'=> '#',
            'icon'=> 'fa-volume-up',
            'sequence'=>3
        ]);

        $cChild = Route::create([
            'route_name'=> 'Services',
            'parent_route'=> $configurations->id,
            'url'=>'services',
        ]);
        $cChild->roles()->attach($admin);

        $cChild = Route::create([
            'route_name'=> 'PCEA Contact Info',
            'parent_route'=> $configurations->id,
            'url'=>'contacts',
        ]);
        $cChild->roles()->attach($admin);

        $cChild = Route::create([
            'route_name'=> 'PCEA Location',
            'parent_route'=> $configurations->id,
            'url'=>'locations',
        ]);
        $cChild->roles()->attach($admin);


        $cChild = Route::create([
            'route_name'=> 'Common Questions',
            'parent_route'=> $configurations->id,
            'url'=>'commonQuestions',
        ]);
        $cChild->roles()->attach($admin);

        #### properties
        $configurations = Route::create([
            'route_name'=>"Properties",
            'url'=> '#',
            'icon'=> 'fa-calendar',
            'sequence'=>3
        ]);

        $cChild = Route::create([
            'route_name'=> 'All Properties',
            'parent_route'=> $configurations->id,
            'url'=>'properties',
        ]);
        $cChild->roles()->attach($admin);
//
//        $cChild = Route::create([
//            'route_name'=> 'All Events',
//            'parent_route'=> $configurations->id,
//            'url'=>'events',
//        ]);
//        $cChild->roles()->attach($admin);
//
//
//        #### events
//        $parent = Route::create([
//        'route_name'=>"Sections",
//        'url'=> '#',
//        'icon'=> 'fa-bars',
//        'sequence'=>3
//    ]);
//
//        $cChild = Route::create([
//            'route_name'=> 'Home Slides',
//            'parent_route'=> $parent->id,
//            'url'=>'slides',
//        ]);
//        $cChild->roles()->attach($admin);
//
//        $cChild = Route::create([
//            'route_name'=> 'About Us',
//            'parent_route'=> $parent->id,
//            'url'=>'aboutuses',
//        ]);
//        $cChild->roles()->attach($admin);
//
//        ####church members
//        $parent = Route::create([
//            'route_name'=>"Church Members",
//            'url'=> '#',
//            'icon'=> 'fa-users',
//            'sequence'=>3
//        ]);
//
//        $cChild = Route::create([
//            'route_name'=> 'All Church Members',
//            'parent_route'=> $parent->id,
//            'url'=>'members',
//        ]);
//        $cChild->roles()->attach($admin);
//        ;
//
        ####    plots
        $parent = Route::create([
            'route_name'=>"Plots",
            'url'=> '#',
                'icon'=> 'fa-book',
            'sequence'=>3
        ]);

        $cChild = Route::create([
            'route_name'=> 'All Plots',
            'parent_route'=> $parent->id,
            'url'=>'plots',
        ]);
        $cChild->roles()->attach($admin);

        #### church groups
        $parent = Route::create([
            'route_name'=>"Management Portfolio",
            'url'=> '#',
            'icon'=> 'fa-group',
            'sequence'=>3
        ]);

        $cChild = Route::create([
            'route_name'=> 'Our Portfolio',
            'parent_route'=> $parent->id,
            'url'=>'managementPortfolios',
        ]);
        $cChild->roles()->attach($admin);
//
//        $cChild = Route::create([
//            'route_name'=> 'Church Group Members',
//            'parent_route'=> $parent->id,
//            'url'=>'churchGroupMembers',
//        ]);
//        $cChild->roles()->attach($admin);


        #### blog
        $parent = Route::create([
            'route_name'=>"Manage Blogs",
            'url'=> '#',
            'icon'=> 'fa-bold',
            'sequence'=>3
        ]);


        $cChild = Route::create([
            'route_name'=> 'All Blogs',
            'parent_route'=> $parent->id,
            'url'=>'blogs',
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
