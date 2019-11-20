<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = [
        'product_id', 'user_id', 'quantity'
    ];

    public function products() {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
