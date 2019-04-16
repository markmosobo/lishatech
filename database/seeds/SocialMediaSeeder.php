<?php

use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SocialMedia::create([
            'facebook'=>'',
            'twitter'=>'',
            'googleplus'=>'',
            'linkedin'=>''
        ]);
    }
}
