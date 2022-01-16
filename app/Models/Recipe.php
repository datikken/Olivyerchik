<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

/**
 * @SWG\Definition(
 *  definition="Recipe",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="heading",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="subheading",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="recipe-intro",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="recipe-detail",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="recipe-nutrition",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="recipe-steps",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="ingred-list",
 *      type="string"
 *  ),
 * )
 */
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
