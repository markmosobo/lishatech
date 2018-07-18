<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    const sys_admin = 'SYSADMIN';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accessL = \App\Models\AccessLevel::where('code','ALL')->first();
        $limited = \App\Models\AccessLevel::where('code','LIMITED')->first();
        $tenant = \App\Models\Tenant::first();
        Role::create(['name' => 'System Admin', 'code' => self::sys_admin,
            'access_level_id'=> $accessL->id,'tenant_id'=>$tenant->id]);
      }
}
