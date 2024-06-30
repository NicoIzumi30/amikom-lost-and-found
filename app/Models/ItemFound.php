<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sluggable\HasSlug;

class ItemFound extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // public function getSlugOptions(): SlugOptions
    // {

    //     return ItemFound::create()
    //         ->generateSlugsFrom('title')
    //         ->saveSlugsTo('slug');

    // }

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
