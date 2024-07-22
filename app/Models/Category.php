<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function lostItems() : HasMany
    {
        return $this->hasMany(LostItem::class);
    }
    
    public function itemFounds() : HasMany
    {
        return $this->hasMany(ItemFound::class);
    }
    public static function createUniqueSlug($title, $id = 0)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (self::where('slug', $slug)->where('id', '<>', $id)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
