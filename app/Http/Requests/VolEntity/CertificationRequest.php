<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class CertificationRequest extends FormRequest
{
    public function rules(): array
    {

        return [
            'CER_ISSUE_DATE' => 'required',
            'VOL_ID' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            "CER_ISSUE_DATE" => "issue date",
            "CER_TYPE" => "type",
            "VOL_ID" => "volunteer",
        ];
    }
}
