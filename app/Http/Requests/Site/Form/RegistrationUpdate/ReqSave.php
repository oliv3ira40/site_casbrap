<?php

namespace App\Http\Requests\Site\Form\RegistrationUpdate;

use Illuminate\Foundation\Http\FormRequest;
use PHPUnit\Framework\Constraint\IsTrue;

class ReqSave extends FormRequest
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
    public function rules() {
        return [
            "zip_code" => "bail|required|max:8",
            "country" => "bail|required|max:180",
            "uf" => "bail|required|max:20",
            "city" => "bail|required|max:180",
            "district" => "bail|required|max:200",
            "street_type" => "bail|required|notIn:null|max:180",
            "public_place" => "bail|required|max:40",
            "number" => "bail|required|max:5",
            "complement" => "bail||max:20",
            "phone" => "bail|max:20",
            "cell_phone" => "bail|required|max:20",
            "commercial_phone" => "bail|max:20",
            "email" => "bail|required|max:180",

            "statement_of_responsibility" => "bail|required",
            "regulatory_liability_term" => "bail|required",
        ];
    }
}
