<?php

use App\Http\Controllers\Api\v1\BannerController;
use App\Http\Controllers\Api\v1\BrandController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\DataBannerController;
use App\Http\Controllers\Api\v1\PeriodController;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\ProductsCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function (){
   Route::apiResource('/banner',BannerController::class);
   Route::apiResource('/brand',BrandController::class);
   Route::apiResource('/category',CategoryController::class);
   Route::apiResource('/product',ProductController::class);
   Route::patch('/banner/{banner}/data',DataBannerController::class);
   Route::get('/periods', [PeriodController::class, 'index']);
   Route::get('/products/category/{category}', [ProductsCategoryController::class, 'index']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
