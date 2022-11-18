<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class CharacteristicRequest extends FormRequest
{
    public function rules(): array
    {

        return [
            'VOL_CH_NAME' => 'required|max:200',
            'VOL_CH_DESCRIPTION' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            "VOL_CH_NAME" => "name",
            "VOL_CH_DESCRIPTION" => "description",
        ];
    }
}
