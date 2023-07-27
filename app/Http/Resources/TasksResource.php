<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TasksResource extends JsonResource
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
                "description" => (string)$this->description,
                "priority" => (string)$this->priority,
                "created_at" => (string)$this->created_at,
                "updated_at" => (string)$this->updated_at
            ],
            "relationship" => [
                "id" => (string)$this->user->id,
                "name" => (string)$this->user->name,
                "email" => (string)$this->user->email
            ]
        ];
    }
}
