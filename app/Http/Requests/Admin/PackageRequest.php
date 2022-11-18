<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'PACKAGE_PRICE' => 'required',
            'PACKAGE_DURATION' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            "PACKAGE_PRICE" => "Price",
            "PACKAGE_DURATION" => "Duration",
            "PACKAGE_START_DATE" => "start date",
            "PACKAGE_FINISH_DATE" => "end date",
        ];
    }
}
