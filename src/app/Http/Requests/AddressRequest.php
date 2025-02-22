<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'postcode' => ['required', 'integer'],
            'address' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'postcode.required' => '郵便番号を記入してください',
            'postcode.integer' => '数値を記入してください',
            'address.required' => '住所を記入してください',
        ];
    }
}
