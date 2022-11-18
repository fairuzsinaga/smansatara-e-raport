<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuruResource extends JsonResource
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
            'nip' => $this->nip,
            'name' => $this->guru_name,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat' => $this->alamat
        ];
    }
}
