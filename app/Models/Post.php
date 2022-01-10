<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasFactory, HasTags;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'recipe_id',
    ];

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageble');
    }
}
