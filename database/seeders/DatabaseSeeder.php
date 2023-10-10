<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //Product::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'TestAccount',
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::factory()->create([
            'name' => 'Intel Core I7 13700k',
            'description' => '• 16 (8P+8E) Cores
            • 24 Threads
            • CPU Cooler NOT Included
            • Intel UHD Graphics 770
            • PCIe 5.0 and 4.0
            • Compatible with B660, B760, H610, H710, H670, H770, Z690, Z790 Chipset',
            'price' => 100.00,
            'brand' => 'Intel',
            'category' => 'CPU',
            'quantity' => 100,
        ]);
    }
}
