<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Models\Banner;
use Illuminate\Http\Request;

class DataBannerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,Banner $banner)
    {
        $banner->title=$request->title;
        $banner->description=$request->description;
        $banner->link=$request->link;
        $banner->save();
        return BannerResource::make($banner);
    }
}
