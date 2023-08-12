<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Http\Resources\BrandResource;
use App\Models\Brand;

class BrandController extends Controller
{

    public function index()
    {
       return BrandResource::collection(Brand::all());
    }


    public function store(StoreBrandRequest $request)
    {
        $brand= Brand::create($request->validated());
        return BrandResource::make($brand);
    }

    public function show(Brand $brand)
    {
      return  BrandResource::make($brand);

    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->validated());
        return BrandResource::make($brand);
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
       return BrandResource::collection(Brand::all());
    }
}
