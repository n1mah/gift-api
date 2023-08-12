<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    protected $fillable = [
        'category_id',
        'title',
        'title_en',
        'description',
        'logo',
        'logo_filter'
    ];
}
