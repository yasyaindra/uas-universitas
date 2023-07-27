<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            "id" => (string)$this->id,
            "attributes" => [
                "name" => (string)$this->name,
                "gpa" => (string)$this->gpa,
                "status" => (string)$this->status,
                "created_at" => (string)$this->created_at,
                "updated_at" => (string)$this->updated_at
            ],
            "relationship" => [
                "id" => (string)$this->major->id,
                "name" => (string)$this->major->name,
                "minimum_gpa" => (string)$this->major->minimum_gpa
            ]
        ];
    }
}
