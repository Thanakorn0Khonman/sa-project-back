<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id'); // Foreign key to link with orders
            $table->unsignedBigInteger('user_id'); // Foreign key to link with users
            $table->text('reason');
            $table->string('telephone')->fixed(10); // Fixed typo: it should be 'telephone' instead of 'telphone'
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Corrected 'user' to 'users'
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
