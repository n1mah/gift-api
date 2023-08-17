<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryProductResource;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsCategoryController extends Controller
{
    public function index(Request $request, Category $category)
    {
        return CategoryProductResource::collection(Category::with(['products'])->where("categories.id",$category->id)->get());
    }
}
