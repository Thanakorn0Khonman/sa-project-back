<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'role' => 'Audit',
            'username' => 'Audit',
            'name' => 'Staff Audit',
            'email' => 'audit@example.com',
        ]);

        \App\Models\User::factory()->create([
            'role' => 'Delivery',
            'username' => 'Delivery',
            'name' => 'Staff Delivery',
            'email' => 'delivery@example.com',
        ]);
    }
}
