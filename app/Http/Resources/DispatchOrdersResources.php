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
            'id'=>$this->id,
            'ref'=>$this->ref,
            'user_id'=>$this->user_id,
            'courier'=>$this->courier,
            'pickup_info'=>json_decode($this->pickup_info),
            'delivery_info'=>json_decode($this->delivery_info),
            'package_info'=>$this->package_info,
            'timeline'=>json_decode($this->timeline),
            'pricing'=>json_decode($this->pricing),
            'rider_info'=>json_decode($this->rider_info),
            'payment_info'=>json_decode($this->payment_info),
            'status' => (string) $this->status,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
        // return parent::toArray($request);
        return $r;
    }
}
