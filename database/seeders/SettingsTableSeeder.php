<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $imageUrl = 'assets/smart/images/logo/logo-b.png';

        // Setting::create(['key' => 'app_name', 'value' => 'Servoll Technologies']);
        // Setting::create(['key' => 'app_logo', 'value' => $imageUrl]);
        // Setting::create(['key' => 'company_name', 'value' => 'Servoll Technologies']);
        // Setting::create(['key' => 'company_logo', 'value' => $imageUrl]);
        // Setting::create(['key' => 'date_format', 'value' => 'Y-m-d']);
        // Setting::create(['key' => 'time_format', 'value' => '0']);
        // Setting::create(['key' => 'time_zone', 'value' => 'Africa/Nairobi']);
        // Setting::create(['key' => 'current_currency', 'value' => '8']);
        // Setting::create(['key' => 'decimal_separator', 'value' => '.']);
        // Setting::create(['key' => 'thousand_separator', 'value' => ',']);
        Setting::create(['key'=> 'company_type', 'value'=> 'IT']);
    }
}
