<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'=>$this->title,
            'title_en'=>$this->title_en,
            'description'=>$this->description,
            'logo'=>$this->logo,
            'logo_filter'=>$this->logo_filter,
        ];
    }
}
