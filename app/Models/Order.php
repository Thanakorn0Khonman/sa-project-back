<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_name',
        'address',
        'total_price',
        'payment_receipt',
        'shipment_method',
        // Add other fillable attributes here
    ];
}
