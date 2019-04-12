<?php

use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tenant::create([
            'name'=>'Mickmart Computers',
            'email'=>'info@lishatech.co.ke',
            'phone_number'=>'0721517582',
            'location'=>'Nairobi'
        ]);
    }
}
