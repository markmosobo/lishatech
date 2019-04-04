<?php

use Illuminate\Database\Seeder;
use App\User;
//use App\Masterfile;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mf = \App\Models\Masterfile::first();
        $role = Role::where('code', 'SYSADMIN')->first();
//        $sec = Role::where('code', 'Secretary')->first();
        $tenant = \App\Models\Tenant::first()->id;

        User::create([
            'name' => $mf->full_name,
            'email' => $mf->email,
            'password' => bcrypt(123456),
            'mf_id' => $mf->id,
            'role_id' => $role->id,
            'email_confirmed'=>true,
            'password_changed'=>true,
            'tenant_id'=>$tenant,
            'created_by'=>1
        ]);



    }
}
