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
        'products',
        'products.*.productId',
        'products.*.quantity',
        'status',        
        // Add other fillable attributes here
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
{
    return $this->belongsToMany(Product::class)->withPivot('quantity');
}

}
