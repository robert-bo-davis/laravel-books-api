<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditionRequest extends FormRequest
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
     * Get the validation rules that apply to edition request.
     *
     * @return array list of validation rules
     */
    public function rules()
    {
        return [
            'number'  => 'required|integer|max:25',
            'title'   => 'required|max:150',
            // isbn regex matches 10 digits that might have 3 more
            // to make 13 so it matches numeric strings that could
            // have leading zeros and can be exactly 10 or 13 digits
            'isbn'    => 'nullable|regex:/^(\d{10}(\d{3})?)?$/',
            'book_id' => 'required|integer',
        ];
    }
}
