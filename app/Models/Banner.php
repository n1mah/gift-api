<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'link',
        'color_from',
        'color_main',
        'color_to',
        'logo_name',
        'logo'
    ];
}
