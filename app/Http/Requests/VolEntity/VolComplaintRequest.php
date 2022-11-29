<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class VolComplaintRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'VOL_ID' => 'required',
            'COMP_TITLE' => 'required',
//            'COMP_AGAINST' => 'required',
            'COMP_DATE' => 'required',
            'COMP_DESCRIPTION' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            "VOL_ID" => "volunteer",
            "COMP_TITLE" => "title",
            "COMP_AGAINST" => "against",
            "COMP_DATE" => "date",
            "COMP_DESCRIPTION" => "description",
        ];
    }
}
