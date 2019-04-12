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
            'full_name' =>'Admin Lishatech',
            'national_id'=> 10000000,
            'gender'=> 'Male',
            'email'=>'info@lishatech.co.ke',
            'phone_number'=> '0721517582',
            'created_by'=> 1,
            'tenant_id'=>1,
        ]);
    }
}
