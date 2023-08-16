<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeriodResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
        public function index(Request $request)
        {
//            return PeriodResource::collection(Category::);
            $products = new Product();
            return $products
                ->select('id', 'period_title','period')
                ->distinct()
                ->orderBy('period')
                ->get();
//            return $products->select("id","period_title")->get()->groupBy('period_title');
//            return $products->select("id","period_title")->orderBy("period_title")->get()->groupBy('period_title');
        }

        public function periodCat(Request $request,Product $product)
        {
//            return PeriodResource::collection(Ca);
        }
    }
