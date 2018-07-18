<?php

use Illuminate\Database\Seeder;

class AccessLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AccessLevel::create([
           'name'=>'All',
           'code'=>'ALL',
            'description'=>'All access granted'
        ]);
        \App\Models\AccessLevel::create([
           'name'=>'Limited',
           'code'=>'LIMITED',
            'description'=>'Limited access'
        ]);
    }
}
