<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryProductResource;
use App\Models\Category;
use Illuminate\Http\Request;

class ProsCatController extends Controller
{
    public function index(Request $request)
    {
        return [];
//        return CategoryProductResource::collection(Category::with(['products'])->where("categories.id",$category->id)->get());
    }
}
