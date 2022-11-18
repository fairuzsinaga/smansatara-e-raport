<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiswaResource extends JsonResource
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
            'wali_siswa_id' => $this->wali_siswa_id,
            'nis' => $this->nis,
            'nisn' => $this->nisn,
            'name' => $this->siswa_name,
            'gender' => $this->jenis_kelamin,
            'address' => $this->alamat
        ];
    }
}
