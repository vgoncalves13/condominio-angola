<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancialRequest extends FormRequest
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
            'bill_type' => 'required',
            'bill_name' => 'required',
            'service_provider_id' => 'required',
            'measurement' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'bill_type' => 'Selecione um tipo de conta!',
            'bill_name' => 'Nome da conta não pode ficar vazio!',
            'service_provider_id' => 'Selecione um provedor!'
        ];
    }
}
