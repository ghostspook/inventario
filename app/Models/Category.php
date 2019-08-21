<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
