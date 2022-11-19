<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceRequest extends FormRequest
{
    public function rules(): array
    {

        return [
            'ATT_DATE' => 'required',
            'ATT_STATUS' => 'required',
            'VOL_ID' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            "ATT_DATE" => "date",
            "ATT_STATUS" => "status",
            "OPP_ID" => "opportunity",
            "VOL_ID" => "volunteer",
        ];
    }
}
