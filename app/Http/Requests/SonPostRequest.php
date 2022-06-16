<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SonPostRequest extends FormRequest
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
            'fullname'=>"required",
            'celphone'=>"required",
            'dni'=>"required",
            'age'=>"required",
            'menber_id'=>"required",

        ];
    }
}
