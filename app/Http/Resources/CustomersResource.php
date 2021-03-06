<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomersResource extends JsonResource
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
            'username'=>$this->username,
            'fullname'=>$this->fullname,
            'email'=>$this->email,
            'mobile'=>$this->mobile,
            'token'=>$this->token,
            'avatar'=>$this->avatar,
            'wallet_balance'=>$this->wallet_balance,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];

        return $r;
    }
}
