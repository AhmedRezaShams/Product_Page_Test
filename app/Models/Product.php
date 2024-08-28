<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Product.php

class Product extends Model
{
    protected $casts = [
        'images' => 'array',
        'details' => 'array',
        'benefits' => 'array',
    ];

    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}

// app/Models/Cart.php

class Cart extends Model
{
    protected $fillable = ['product_id', 'quantity', 'color', 'size', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

