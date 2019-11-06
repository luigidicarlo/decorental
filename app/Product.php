<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;

class Product extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description', 
        'price', 'discount', 'image'
    ];

    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->hasOne(Category::class);
    }
}
