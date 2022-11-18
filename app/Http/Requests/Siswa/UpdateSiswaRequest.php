<?php

namespace App\Http\Requests\Siswa;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nis' => ['required', 'min:4', 'max:4', Rule::unique('siswas')->ignore($this->siswa)->ignore($this->wali_siswa_id)],
            'nisn' => ['required', 'min:10', 'max:10', Rule::unique('siswas')->ignore($this->siswa)->ignore($this->wali_siswa_id)],
            'siswa_name' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required']
        ];
    }
}
