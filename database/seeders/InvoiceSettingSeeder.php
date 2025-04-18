<?php

namespace Database\Seeders;

use App\Models\InvoiceSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        InvoiceSetting::create([
            'key' => 'busBookingTemplate',
            'template_name' => 'Bus Booking',
            'template_color' => '#E22223',
        ]);

        InvoiceSetting::create([
            'key' => 'carBookingTemplate',
            'template_name' => 'Car Booking',
            'template_color' => '#E11D48',
        ]);

        InvoiceSetting::create([
            'key' => 'agencyServiceTemplate',
            'template_name' => 'Agency',
            'template_color' => '#E11D48',
        ]);

        InvoiceSetting::create([
            'key' => 'domainTemplate',
            'template_name' => 'Domain',
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'cleaningeTemplate',
            'template_name' => 'Agency',
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'hotelBookingTemplate',
            'template_name' => 'Hotel Booking',
            'template_color' => '#4A90E2',
        
        ]);

        InvoiceSetting::create([
            'key' => 'ecommerceTemplate',
            'template_name' => 'E-commerce',
            'template_color' => '#34495E',
        ]);

        // for hospital template and color the same as hospital
        InvoiceSetting::create([
            'key' => 'hospitalTemplate',
            'template_name' => 'Hospital',
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'internetTemplate',
            'template_name' => 'Internet',
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'movieBookingTemplate',
            'template_name' => 'Movie Booking',
            'template_color' => '#4A90E2',

        ]);

        InvoiceSetting::create([
            'key' => 'fitnessTemplate',
            'template_name' => 'Fitness',
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'moneyExchangeTemplate',
            'template_name' => 'Money Exchange',
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'photoStudioTemplate',
            'template_name' => 'Photo Studio',
            'template_color' => '#34495E',

        ]);

        InvoiceSetting::create([
            'key' => 'restaurantBillTemplate',
            'template_name' => 'Restaurant Bill',
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'stadiumTemplate',
            'template_name' => 'Stadium',   
            'template_color' => '#34495E',
        ]);

        InvoiceSetting::create([
            'key' => 'studentTemplate',
            'template_name' => 'Student',
            'template_color' => '#34495E',
        ]);


        InvoiceSetting::create([
            'key' => 'trainBookingTemplate',
            'template_name' => 'Train Booking',
            'template_color' => '#4A90E2',
        ]);

        InvoiceSetting::create([
            'key' => 'travelTemplate',
            'template_name' => 'Travel',
            'template_color' => '#34495E',
        ]);


      
    }

    }

