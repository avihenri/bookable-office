<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Offices extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'organisation_id' => $this->organisation_id,
            'name' => $this->name,
            'desc' => $this->desc,
            'address' => $this->address,
            'city' => $this->city,
            'country_id' => $this->country_id, 
            'post_code' => $this->post_code,
            'building_type' => $this->building_type,
            'office_type' => $this->office_type,
            'accessibility' => $this->accessibility,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by, // update with user resource
        ];
    }
}
