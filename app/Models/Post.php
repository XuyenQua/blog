<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'short_description',
        'slug',
        'image',
        'content',
        'category_id',
        'views',
        'is_published',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
