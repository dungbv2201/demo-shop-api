<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;


class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        return  [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'sale_off' => $this->sale_off,
            'description' => $this->description,
            'category' => $this->category->name,
            'image' => $this->image,
            'stock' => $this->stock,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
