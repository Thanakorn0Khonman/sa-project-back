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
        $this->call([
            ProductSeeder::class,
            UserSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        //Product::factory(10)->create();

        \App\Models\User::factory()->create([
            'role' => 'Admin',
            'username' => 'TestAccount',
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        

        
    }
}
