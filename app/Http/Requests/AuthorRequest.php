<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
     * Get the validation rules that apply to author request.
     *
     * @return array list of validation rules
     */
    public function rules()
    {
        return [
            'first_name'  => 'required|max:50',
            'middle_name' => 'nullable|max:50',
            'last_name'   => 'required|max:50',
            'birth_year'  => 'nullable|date_format:Y',
            'death_year'  => 'nullable|date_format:Y',
        ];
    }
}
