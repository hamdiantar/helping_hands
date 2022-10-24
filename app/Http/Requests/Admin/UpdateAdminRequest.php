<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
{
    public function rules(): array
    {
        $mailValidation = 'required|max:200|unique:VOLUNTEER,VOL_EMAIL';
        if ($this->id) {
            $mailValidation = 'required|max:200|unique:VOLUNTEER,VOL_EMAIL,'. $this->id.',VOL_ID';
        }
        return [
            'ADMIN_USERNAME' => 'required|max:200',
            'password' => 'nullable|min:6',
            'password_confirmation' => 'nullable|min:6',
            'ADMIN_FNAME' => 'required|max:200',
            'ADMIN_LNAME' => 'required|max:200',
            'ADMIN_EMAIL' => 'required|max:200|unique:ADMIN,ADMIN_EMAIL,'.getAuthAdmin()->ADMIN_ID.',ADMIN_ID',
            'ADMIN_PHONE' => 'nullable',
            'ADMIN_POSITION' => 'nullable|max:200',
            'ADMIN_ROLE' => 'required|max:200',
        ];
    }

    public function attributes(): array
    {
        return [
            "ADMIN_USERNAME" => "USERNAME",
            "ADMIN_FNAME" => "FNAME",
            "ADMIN_LNAME" => "LNAME",
            "ADMIN_EMAIL" => "EMAIL",
            "ADMIN_PHONE" => "PHONE",
            "ADMIN_POSITION" => "POSITION",
            "ADMIN_ROLE" => "ROLE",
        ];
    }
}
