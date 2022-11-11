<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'SUB_PRICE' => 'required',
            'SUB_DURATION' => 'required',
            'SUB_START_DATE' => 'required|after_or_equal:' . now(),
            'SUB_FINISH_DATE' => 'required|date|after:SUB_START_DATE',
        ];
    }

    public function attributes(): array
    {
        return [
            "SUB_PRICE" => "Price",
            "SUB_DURATION" => "Duration",
            "SUB_START_DATE" => "start date",
            "SUB_FINISH_DATE" => "end date",
        ];
    }
}
