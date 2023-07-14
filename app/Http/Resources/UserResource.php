<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'First Name' => $request->first_name,
            'Last Name' => $request->last_name,
            'Username' => $request->username,
            'Email' => $request->email,
            'Token' => $request->token
        ];
    }
}
