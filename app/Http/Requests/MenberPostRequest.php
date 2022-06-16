<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenberPostRequest extends FormRequest
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
            'codemenber'=>"required",
            'name'=>"required",
            'fatherlastname'=>"required",
            'motherlastname'=>"required",
            'birthdate'=>"required",
            'dni'=>"required",
            'celphone'=>"required",
            'degree'=>"required",
            'email'=>"required",
            'civilestatus'=>"required",
            'address'=>"required",
            'ruc'=>"required",
            'ubigeo'=>"required",
            'menberstatus'=>"required",
            'docpatrom'=>"required",
            'user_id'=> "required"
        ];
    }
}
