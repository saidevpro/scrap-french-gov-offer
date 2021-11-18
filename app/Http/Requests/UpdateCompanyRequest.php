<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'siret' => 'required|string|between:2,100',
            'address_line1' => 'nullable|string|min:3',
            'address_line2' => 'nullable|string',
            'zip_code' => 'string|min:3|max:7',
            'city_id' => 'nullable|integer',
            'category_id' => 'nullable|integer',
            "phone" => 'nullable|string',
            "email" => 'nullable|email',
            'legal_form' => 'nullable|string',
            'turnover_slice' => 'nullable|int',
            'creation_date' => 'nullable|date_format:Y-m-d',
            'code_naf' => 'nullable|string',
            'number_employees' => 'nullable|integer',
            'fb' => 'nullable|string',
            'tw' => 'nullable|string',
            'in' => 'nullable|string',
            'ins' => 'nullable|string',
            'yt' => 'nullable|string',
            'gp' => 'nullable|string',
            'website' => 'nullable|url',
            'description' => 'nullable|string',
            'services' => 'nullable|string',
            "logo" => "nullable|image",
            "galery" => "nullable|array",
            "short_description" => "nullable|string",
            "working_days" => "nullable|array",
            "certifications" => "nullable|array",
            "intervention_zones" => "nullable|array",
            "ref_public_clients" => "nullable|array",
            "ref_private_clients" => "nullable|array",
            'year_of_experience' => 'nullable|int',
            'quote_duration' => 'nullable|int',
            'zone_type' => 'nullable|string',
            'search_keywords' => 'nullable|array',
            'search_xkeywords' => 'nullable|array',
            'contacts' => 'nullable|array',
            'presentation_documents' => 'nullable|array'
        ];
    }
}
