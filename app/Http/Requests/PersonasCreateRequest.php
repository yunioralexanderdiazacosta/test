<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PersonasCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'cedula' => 'required | min:6 | max:6 | unique:personas',
            'nombre' => 'required',
            'correo' => 'required | email',
            'cargo_id' => 'nullable'
        ];
    }
}
