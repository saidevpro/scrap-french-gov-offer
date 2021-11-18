<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name' => 'required|string',
            'siret' => 'required|string|between:2,100|unique:companies',
            'address_line1' => 'string|min:3',
            'address_line2' => 'string',
            'zip_code' => 'string|min:3|max:7',
            'city_id' => 'integer',
            'function' => 'string',
            'description_1' => 'string|min:3',
            'description_2' => 'string|min:3',
            'information' => 'string|min:3',
            'legal_form' => 'string',
            'turnover' => 'string',
            'creation_date' => 'nullable|date_format:Y-m-d',
            'code_naf' => 'string',
            'number_employees' => 'integer',
            'fb' => 'string',
            'tw' => 'string',
            'in' => 'string',
            'intervention_country_id' => 'string',
            'intervention_department_id' => 'string',
            'intervention_city_id' => 'string',
            'website' => 'string'
        ];
    }
}
