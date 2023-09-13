<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest
{
    /*        @return bool
*/
    public function authorize()
    {
        return true;
    }

    /*        @return array
*/
    public function rules()
    {
        return [
            'name' => 'nullable|max:191',
            'tel' => 'required|max:25',
            'address' => 'required|max:191',
            'date' => 'required|after:yesterday',
            'time' => 'required',
            'message' => 'nullable|max:191'
        ];
    }

    public function messages()
    {
        return [
            'tel.required' => 'Telefon jest wymagany',
            'date.required' => 'Dzień dostawy jest wymagany',
            'date.after:yesterday' => 'Dzień musi być dzisiaj albo w przyszlości',
            'time.required' => 'Czas dostawy jest wymagany',
            'address.required' => 'Adres jest wymagany',
            '*.max' => 'Przekroczona wartość maksymalna:max:attribute'
        ];
    }
}
