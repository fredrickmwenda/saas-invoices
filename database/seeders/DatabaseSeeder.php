<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           // InvoiceSettingSeeder::class,
            SubscriptionPlanSeeder::class,
            // \App\Models\User::factory(10)->create();
            // $this->call(DefaultRoleSeeder::class);
            // $this->call(DefaultPermissionSeeder::class);
            // $this->call(DefaultUserSeeder::class);
            // $this->call(DefaultCountriesSeeder::class);
            // $this->call(InvoiceSettingTableSeeder::class);
            //$this->call(SettingsTableSeeder::class);
            // $this->call(SettingTableSeederFields::class);
            // $this->call(DefaultCurrencySeeder::class);
            // $this->call(SettingFavIconFieldSeeder::class);
            // $this->call(PaymentFieldSeeder::class);
            // Client::factory()
            // ->count(10) // Create 10 clients
            // ->create();
        ]);
    }
}
