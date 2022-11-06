<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class OppRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'OPP_NAME' =>  'required|max:200',
            'OPP_DESCRIPTION' =>  'required',
            'OPP_START_DATE' =>  'required|after_or_equal:'.now(),
            'OPP_FINISH_DATE' =>  'required|date|after:OPP_START_DATE',
            'OPP_START_TIME' =>  'required',
            'OPP_END_TIME' =>  'required',
            'OPP_TOTAL_HOUR' =>  'required',
            'OPP_CITY' =>  'required|max:200',
            'OPP_LOCATION' =>  'required|max:200',
            'OPP_CAPACITY' =>  'required|max:200',
        ];
    }

    public function attributes(): array
    {
        return [
            "OPP_NAME" => "title",
            "OPP_DESCRIPTION" => "description",
            "OPP_START_DATE" => "start date",
            "OPP_FINISH_DATE" => "end date",
            "OPP_START_TIME" => "start time",
            "OPP_END_TIME" => "edn time",
            "OPP_TOTAL_HOUR" => "total hours",
            "OPP_CITY" => "city",
            "OPP_LOCATION" => "location",
            "OPP_CAPACITY" => "capacity",
            "OPP_STATUS" => "status",
        ];
    }
}
