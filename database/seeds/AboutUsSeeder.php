<?php

use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AboutUs::create([
            'description'=>'Lishatech properties was started in 2003 as a venture for selling land but has grown over time to offer comprehensive real estate services .The company has continually grown to selling properties and managing property within Nairobi and its environs. Lishatech Ltd is a business registered by the registrar of companies and societies in Kenya No C. 122917.  The business provides property services ranging from letting, selling and managing of residential and commercial properties to development consultancy.

                            The business exists to impact people by entrenching Christian values in the way they do business and winning them for Christ. The Company principle is registered under the Estate Agents Act Cap 533 of the laws of Kenya',
            'vision'=>'Be necessary partner for every investor in real estate, turning real estate ventures into credible investment options, adding value in all we do.',
            'mission'=>'To partner with individuals, companies and organizations in private and public sector, to manage properties with integrity and Professionalism derived by cutting edge solutions that ensure sustainability and profitability'
        ]);
    }
}
