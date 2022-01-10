<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'src',
        'filename',
        'ext',
        'size'
    ];

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'imageble');
    }

    public function recipes()
    {
        return $this->morphedByMany(Recipe::class, 'imageble');
    }
}
