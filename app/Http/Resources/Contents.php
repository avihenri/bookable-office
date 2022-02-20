<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contents extends JsonResource
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
            "id" => $this->id,
            "item" => $this->item,
            "type" => $this->type,
            "desc" => $this->desc,
            "location_desc" => $this->location_desc,
            "organisation_id" => $this->organisation_id,
        ];
    }
}
