<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class VolEntityRegisterRequest extends FormRequest
{
    public function rules(): array
    {
        $mailValidation = 'required|max:200|unique:VOLUNTEERING_ENTITY,VOL_ENTITY_EMAIL';
        $passwordValidation = 'required|min:6|confirmed';
        $passwordConfirmationValidation = 'required|min:6';
        return [
            'VOL_ENTITY_USERNAME' =>  'required|max:200',
            'password' =>  $passwordValidation,
            'password_confirmation' => $passwordConfirmationValidation,
            'VOL_ENTITY_NAME' =>  'required|max:200',
            'VOL_ENTITY_EMAIL' =>  $mailValidation,
            'VOL_ENTITY_CR_NO' =>  'required',
            'VOL_ENTITY_SECTOR' =>  'required',
            'VOL_ENTITY_LOGO' =>  'required',

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
