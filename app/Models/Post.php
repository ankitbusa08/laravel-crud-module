<?php

namespace Modules\Posts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Posts\Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'description',
    ];

    // protected static function newFactory(): PostFactory
    // {
    //     // return PostFactory::new();
    // }
}
