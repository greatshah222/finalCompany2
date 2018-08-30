<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'=>'Village Dev',
            'address'=>' Kathmandu ,Nepal',
            'contact_number'=>' +9779811331624',
            'contact_email'=>' info@villagedev.com',
            'about_us'=>'Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur. Excepteur sint proident sunt in culpa qui officia anim id est laborum.'

        ]);
    }
}







