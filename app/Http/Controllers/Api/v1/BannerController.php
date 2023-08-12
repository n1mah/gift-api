<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Http\Resources\BannerResource;
use App\Models\Banner;

class BannerController extends Controller
{

    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return BannerResource::collection(Banner::all());
    }


    public function store(StoreBannerRequest $request)
    {
        $banner= Banner::create($request->validated());
        return BannerResource::make($banner);
    }

    public function show(Banner $banner): BannerResource
    {
        return BannerResource::make($banner);
    }

    public function update(UpdateBannerRequest $request, Banner $banner): BannerResource
    {
        $banner->update($request->validated());
        return BannerResource::make($banner);
    }

    public function destroy(Banner $banner): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $banner->delete();
        return BannerResource::collection(Banner::all());
    }
}
