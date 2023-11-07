<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'quantity',
        'category',
        'brand',
        'image', // Add brand to the fillable array
    ];
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function deductProductQuantities()
    {
        foreach ($this->products as $product) {
            $quantityToDeduct = $product->pivot->quantity;
            $product->decrement('quantity', $quantityToDeduct);
        }
    }
}
