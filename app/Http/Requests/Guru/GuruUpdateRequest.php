<?php

namespace App\Http\Requests\Guru;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class GuruUpdateRequest extends FormRequest
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
            'nip' => ['required', 'unique:gurus,nip,'.$this->guru->id],
            // 'nip' => ['required', Rule::unique('gurus')->ignore($this->guru)],
            'guru_name' => ['required'],
            'jenis_kelamin' => ['required'],
            'alamat' => ['required']
        ];
    }
}
