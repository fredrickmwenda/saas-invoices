<?php

namespace Database\Seeders;

use App\Models\Role as CustomRole;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $input = [
 
            
            'first_name' => fake()->firstNameMale(),
            'last_name' => fake()->lastName(),
            'email' => 'mwendafredrick31@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('H$2ut*ki'),
            // 'avatar' => fake()->imageUrl(),
            'remember_token' => Str::random(10),
            'is_default_admin' => 1,
        ];
        $user = User::create($input);
        $user->assignRole(CustomRole::ROLE_ADMIN);
    }
}
