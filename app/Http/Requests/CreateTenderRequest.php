<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTenderRequest extends FormRequest
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
            'ref' => 'required|string',
            'title' => 'required|string',
            'excerpt' => 'required|string', 
            'content' => 'required', 
            'city_id' => 'required|exists:cities,id', 
            'department_id' => 'required|exists:departments,id', 
            'country_id' => 'required|exists:countries,id', 
            'activity_id' => 'required|exists:activities,id', 
            'procedure_type_id' => 'required|exists:procedure_types,id', 
            'budget_type_id' => 'required|exists:budget_types,id', 
            'release_date' => 'required|date',
            'closing_date' => 'required|date', 
            'zip_code' => 'required|integer', 
            'denomination' => 'required|string', 
            'tel' => 'required|string', 
            'url' => 'url',
            'url_profil' => 'url', 
            'url_information' => 'url',
            'url_participation' => 'url'
        ];
    }
}
