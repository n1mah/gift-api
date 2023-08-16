<?php

use App\Http\Controllers\Api\v1\BannerController;
use App\Http\Controllers\Api\v1\BrandController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Http\Controllers\Api\v1\DataBannerController;
use App\Http\Controllers\Api\v1\PController;
use App\Http\Controllers\Api\v1\PeriodController;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\ProductsCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('v1')->group(function (){
   Route::apiResource('/banner',BannerController::class);
   Route::apiResource('/brand',BrandController::class);
   Route::apiResource('/category',CategoryController::class);
   Route::apiResource('/product',ProductController::class);
   Route::patch('/banner/{banner}/data',DataBannerController::class);
//   Route::get('/products/category/{category}',[\App\Http\Controllers\api\v1\ProductsCategoryController::class,'index']);
   Route::get('/periods', [PeriodController::class, 'index']);
   Route::get('/test/{category}', [ProductsCategoryController::class, 'index']);
//   Route::get('/periods/{category}',\App\Http\Controllers\api\v1\ProductsCategoryController::class);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
