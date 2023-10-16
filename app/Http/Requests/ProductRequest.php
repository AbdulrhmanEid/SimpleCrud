<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>'required',
            "price"=>'numeric|required',
            "quantity"=>'required|numeric'
        ];
    }
    public function messages(): array
    {
        return[
            'name'=>'هذا الحقل مطلوب',
            'price'=>'هذا الحقل يجب ان يكون عددا',
            'quantity'=>'هذا الحقل مطلوب',
        ];

    }
}
