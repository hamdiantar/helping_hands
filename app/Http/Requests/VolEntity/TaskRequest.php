<?php

namespace App\Http\Requests\VolEntity;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'OPP_TASK_NAME' => 'required|max:200',
            'OPP_TASK_DESCRIPTION' => 'required',
        ];
    }

    public function attributes(): array
    {
        return [
            "OPP_TASK_NAME" => "name",
            "OPP_TASK_DESCRIPTION" => "description",
        ];
    }
}
