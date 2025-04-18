<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $settings = [
            ['key' => 'city', 'value' => 'Nairobi'],
            ['key' => 'state', 'value' => 'Nairobi'],
            ['key' => 'country', 'value' => 'Kenya'],
            ['key' => 'zipcode', 'value' => '300010'],
            ['key' => 'fax_no', 'value' => '555-123-4567'],
            ['key' => 'show_additional_address_in_invoice', 'value' => 0],
        ];
        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
