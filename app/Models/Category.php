<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

}
