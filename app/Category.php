<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;


class Category extends Model
{
    // use Searchable;

    protected $fillable = [
        'name', 'parent_id','id'
    ];

    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function scopeLastest($query){
        return $query->orderBy("id","DESC");
    }

    public function scopeSearchName($query,$name){
        return $query -> where('name','LIKE', "%$name%");
    }
}
