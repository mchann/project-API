<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdukResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name'=> $this->name,
            'stock' => $this->stock,
            'code' => $this->code,
            'basic_price' => $this->basic_price,
            'selling_price' => $this->selling_price
        ];
    }
}

//  name, stock, code, basic_price, dan selling_price.