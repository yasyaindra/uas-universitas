<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassroomResource extends JsonResource
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
                "capacity" => (integer)$this->capacity,
                "class_number" => (string)$this->class_number,
                "created_at" => (string)$this->created_at,
                "updated_at" => (string)$this->updated_at
            ],
            "relationship" => [
                "student" => [
                    "id" => (string)$this->student->id,
                    "name" => (string)$this->student->name,
                    "email" => (string)$this->student->email
                ],
                "major" => [
                    "name" => (string)$this->major->name,
                    "minimum" => (string)$this->major->minimum_gpa,
                ],
                "lecturer" => [
                    "name" => (string)$this->lecturer->name,
                    "phone_number" => (string)$this->lecturer->phone_number,
                ],
            ]
        ];
    }
}
