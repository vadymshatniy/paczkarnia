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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:191',
            'description' => 'required|max:2500',
            'price' => 'required|min:0|max:999999|numeric',
            'old_price' => 'nullable|min:0|max:999999|numeric',
        ];
    }
    public function messages()
    {
        return [
            '*.required' => 'Musi być wypełnione:attribute', // todo
            'date.required' => 'Dzień dostawy jest wymagany',
            'date.after:yesterday' => 'Dzień musi być dzisiaj albo w przyszlości',
            'time.required' => 'Czas dostawy jest wymagany',
            'address.required' => 'Adres jest wymagany',
            '*.max' => 'Przekroczona wartość maksymalna:max:attribute'
        ];
    }
}
