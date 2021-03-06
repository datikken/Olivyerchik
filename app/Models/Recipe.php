<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Recipe extends Model
{
    use HasFactory, HasTags;

    protected $table = 'recipes';

    protected $fillable = [
        'heading',
        'subheading',
        'recipe-intro',
        'recipe-detail',
        'recipe-nutrition',
        'recipe-steps',
        'ingred-list'
    ];

    public function images()
    {
        return $this->morphToMany(Image::class, 'imageble');
    }
}
