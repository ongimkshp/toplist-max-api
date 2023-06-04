<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MassagePlaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'name' => $this->name,
            'area' => $this->area,
            'address' => $this->address,
            'rate' => $this->rate,
            'service' => $this->service,
            'reviewContent' => $this->review_content,
            'phoneNumber' => $this->phone_number,
            'advantage' => $this->advantage,
            'maxPrice' => $this->max_price,
            'minPrice' => $this->min_price,
            'serviceLanguages' => ServiceLanguageResource::collection($this->serviceLanguages),
        ];
    }
}