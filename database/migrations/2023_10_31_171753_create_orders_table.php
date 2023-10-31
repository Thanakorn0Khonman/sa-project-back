<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\OrderStatus; // Import the enum

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Assuming a foreign key to users table
            $table->string('user_name');
            $table->string('address');
            $table->decimal('total_price', 10, 2);
            $table->string('payment_receipt');
            $table->string('shipment_method');
            $table->string('status')->default('Pending'); // Add the 'status' field with default value 'Pending'
            $table->timestamps();
        });
    }

    protected $casts =[
        'status' => OrderStatus::class
    ];

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

