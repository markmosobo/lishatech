<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contact::create([
            'address'=>'P. O Box 5827-00100, Nairobi',
            'phone'=>'+254 729558206',
            'alternative_phone'=>'+254 789751429',
            'email'=>'info@lishatech.co.ke'
        ]);
    }
}
