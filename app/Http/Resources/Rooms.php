<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rooms extends JsonResource
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
            'id' => $this->id,
            'office_id' => $this->office_id,
            'name' => $this->name,
            'type' => ucwords(strtolower(str_replace('_', ' ', $this->type))),
            'max_capacity' => $this->max_capacity,
        ];
    }
}
