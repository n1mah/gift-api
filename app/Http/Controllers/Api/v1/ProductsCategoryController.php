<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryProductResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,Category $category)
    {
        return CategoryProductResource::collection(
            Category::with(['products'])->where("categories.id",$category->id)->get()
        );

    }
}
