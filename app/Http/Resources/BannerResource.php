<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BannerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id'=>$this->id,
          'title'=>$this->title,
          'description'=>$this->description,
          'link'=>$this->link,
          'color_from'=>$this->color_from,
          'color_main'=>$this->color_main,
          'color_to'=>$this->color_to,
          'logo_name'=>$this->logo_name,
          'logo'=>$this->logo,

        ];
    }
}
