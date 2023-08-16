<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeriodResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PController extends Controller
{
        public function index(Request $request,Category $category)
        {
//            return PeriodResource::collection(Category::);
//            $products = new Product();
            return [];
//            return $products->select("id","period_title")->get()->groupBy('period_title');
//            return $products->select("id","period_title")->orderBy("period_title")->get()->groupBy('period_title');
            //        return    CategoryProductResource::collection(Category::with(['products'])->where("categories.id",$category->id)->get());

//        return        $category->products()->get();
//        return             (Category::with(['products'])->where("categories.id",$category->id)->get());
//        return (
//            Category::with(['products'])->where("categories.id",$category->id)
////        $category->products()->get()
//        );
//        return CategoryProductResource::collection(Category::with(['products'])->where("categories.id",$category->id)->get());
        }


    }
