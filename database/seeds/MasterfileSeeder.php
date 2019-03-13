<?php

use Illuminate\Database\Seeder;

class MasterfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Masterfile::create([
            'full_name' =>'Admin Admin',
            'national_id'=> 10000000,
            'gender'=> 'Male',
            'email'=>'admin@localhost.com',
            'phone_number'=> '072151582',
            'created_by'=> 1,
            'tenant_id'=>2,
        ]);
    }
}
