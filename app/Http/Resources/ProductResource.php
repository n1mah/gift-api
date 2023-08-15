<?php

namespace App\Http\Resources;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'brand_id'=>$this->brand_id,
            'brand'=>BrandResource::make(Brand::where('id',$this->brand_id)->first()),
            'category_id'=>$this->category_id,
            'title'=>$this->title,
            'title_en'=>$this->title_en,
            'description'=>$this->description,
            'period'=>$this->period,
            'period_title'=>$this->period_title,
            'price'=>$this->price,
        ];
    }
}
