<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //Product::factory(10)->create();
        $product = new Product();
        $product->id = "1";
        $product->name = "Intel Core I7 13700k";
        $product->description = "• 16 (8P+8E) Cores
        • 24 Threads
        • CPU Cooler NOT Included
        • Intel UHD Graphics 770
        • PCIe 5.0 and 4.0";
        $product->price = 15700.00;
        $product->brand = "Intel";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();

        $product = new Product();
        $product->id = "2";
        $product->name = "Intel Core I5 12600K";
        $product->description = "• 10 (6P+4E) Cores
        • 16 Threads 
        • Intel UHD Graphics 770
        • CPU Cooler Not Included
        • PCIe 5.0 and 4.0";
        $product->price = 10900.00;
        $product->brand = "Intel";
        $product->category = "CPU";
        $product->quantity = "100";
        $product->save();
    }
}
