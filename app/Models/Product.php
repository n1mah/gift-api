<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    protected $fillable = [
        'brand_id',
        'title',
        'title_en',
        'description',
        'period',
        'period_title',
        'price',
    ];
}
