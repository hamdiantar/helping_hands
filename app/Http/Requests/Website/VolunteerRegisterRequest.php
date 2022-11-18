<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRegisterRequest extends FormRequest
{
    public function rules(): array
    {
        $mailValidation = 'required|max:200|email|unique:VOLUNTEER,VOL_EMAIL';
        $passwordValidation = 'required|min:6|confirmed';
        if ($this->id) {
           $mailValidation = 'required|max:200|email|unique:VOLUNTEER,VOL_EMAIL,'. $this->id.',VOL_ID';
            $passwordValidation = 'nullable|min:6';
        }
//        dd($passwordValidation);
        return [
            'VOL_USERNAME' =>  'required|max:200',
            'password' =>  $passwordValidation,
            'VOL_FNAME' =>  'required|max:200',
            'VOL_LNAME' =>  'required|max:200',
            'VOL_EMAIL' =>  $mailValidation,
            'VOL_PHONE' =>  'required',
            'VOL_NATIONAL_ID' =>  'required|max:200',
            'VOL_SCHOOL_NAME' =>  'required|max:200',
            'VOL_GRADE_LEVEL' =>  'required',
            'VOL_CITY' =>  'required',
            'VOL_TARGET_HOUR' =>  'required|min:0',
//            'VOL_COMPLETED_HOUR' =>  'required|min:0',
            'VOL_GENDER' =>  'required|in:male,female',
        ];
    }

    public function attributes(): array
    {
        return [
            "VOL_USERNAME" => "USERNAME",
            "VOL_FNAME" => "FNAME",
            "VOL_LNAME" => "LNAME",
            "VOL_EMAIL" => "EMAIL",
            "VOL_PHONE" => "PHONE",
            "VOL_NATIONAL_ID" => "NATIONAL_ID",
            "VOL_SCHOOL_NAME" => "SCHOOL_NAME",
            "VOL_GRADE_LEVEL" => "GRADE_LEVEL",
            "VOL_CITY" => "CITY",
            "VOL_TARGET_HOUR" => "TARGET_HOUR",
            "VOL_COMPLETED_HOUR" => "COMPLETED_HOUR",
            "VOL_GENDER" => "GENDER",
        ];
    }
}
