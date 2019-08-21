<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'sku',
        'name',
        'category_id',
        'description',
        'comments',
        'stock',
        'cost',
        'price',
        'rack',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
