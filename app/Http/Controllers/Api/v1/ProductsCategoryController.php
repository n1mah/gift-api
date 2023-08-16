<?php



namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryProductResource;
use App\Models\Category;

class ProductsCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Category $category)
    {
        return    CategoryProductResource::collection(Category::with(['products'])->where("categories.id",$category->id)->get());

//        return        $category->products()->get();
//        return             (Category::with(['products'])->where("categories.id",$category->id)->get());
//        return (
//            Category::with(['products'])->where("categories.id",$category->id)
////        $category->products()->get()
//        );

    }
}
