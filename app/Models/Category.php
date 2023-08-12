<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function brands(): HasMany
    {
        return $this->hasMany(Brand::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    protected $fillable = [
        'title',
        'title_en',
    ];
}
