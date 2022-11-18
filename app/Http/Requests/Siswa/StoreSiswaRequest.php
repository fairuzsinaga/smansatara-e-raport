<?php

namespace App\Http\Requests\Siswa;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
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
            'wali_siswa_id' => ['required'],
            'nis' => ['required', 'min:4', 'max:4', 'unique:siswas,nis'],
            'nisn' => ['required', 'min:10', 'max:10', 'unique:siswas,nis'],
            'siswa_name' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required']
        ];
    }

    public function prepareForValidation()
    {
        // 
    }
}
