<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class VolEntityUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'VOL_ENTITY_USERNAME' =>  'required|max:200',
            'password' =>  'nullable|min:6|confirmed',
            'VOL_ENTITY_NAME' =>  'required|max:200',
            'VOL_ENTITY_EMAIL' =>  'required|max:200|unique:VOLUNTEERING_ENTITY,VOL_ENTITY_EMAIL,'.getAuthVolEntity()->VOL_ENTITY_ID.',VOL_ENTITY_ID',
            'VOL_ENTITY_CR_NO' =>  'required',
            'VOL_ENTITY_SECTOR' =>  'required',
            'VOL_ENTITY_LOGO' =>  'nullable',

        ];
    }

    public function attributes(): array
    {
        return [
            "VOL_ENTITY_USERNAME" => "USERNAME",
            "VOL_ENTITY_NAME" => "Name",
            "VOL_ENTITY_EMAIL" => "EMAIL",
            "VOL_ENTITY_CR_NO" => "CR NO",
            "VOL_ENTITY_SECTOR" => "SECTOR",
            "VOL_ENTITY_LOGO" => "LOGO",
        ];
    }
}
