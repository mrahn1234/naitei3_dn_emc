<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'parent_id'
    ];

    public function products(){
        return $this->belongsToMany(Product::class, 'categories_products', 'category_id', 'product_id');
    }

    public function suggestions(){
        return $this->hasMany(Suggestion::class);
    }

    public function children(){
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
