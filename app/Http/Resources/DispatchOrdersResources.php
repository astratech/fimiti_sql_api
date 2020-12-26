<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DispatchOrdersResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $r = [
            'pickup_info'=>json_decode($this->pickup_info),
            'delivery_info'=>json_decode($this->delivery_info),
        ];
        // return parent::toArray($request);
        return $r;
    }
}
