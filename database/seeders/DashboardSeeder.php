<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Invoice;

class DashboardSeeder extends Seeder
{
    public function run()
    {
        // Create sample clients
        $clients = Client::factory(10)->create();

        // Create sample invoices for each client
        foreach ($clients as $client) {
            Invoice::factory(5)->create([
                'client_id' => $client->id,
                'amount' => rand(100, 1000),
                'status' => ['paid', 'unpaid', 'overdue', 'partial'][array_rand(['paid', 'unpaid', 'overdue', 'partial'])],
            ]);
        }
    }
}
