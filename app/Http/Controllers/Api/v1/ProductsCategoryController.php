<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsCategoryController extends Controller
{
    public function index(Request $request, Category $category)
    {
        return ["Ok"];
    }
}
