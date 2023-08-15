<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'category_id'=>$this->id,
            'title'=>$this->title,
            'title_en'=>$this->title_en,
            'products'=>ProductResource::collection($this->products)
//            'products'=>[
//                'title'=> $this->products->title,
//                'title_en'=> $this->products->title_en,
//                'period_title'=> $this->products->period_title,
//                'price'=> $this->products->price,
//            ],
//            'created_at'=>$this->created_at,
//            'updated_at'=>$this->updated_at,
        ];
    }
}
