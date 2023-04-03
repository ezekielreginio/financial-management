<?php

namespace App\Http\Requests;

use App\Http\Requests\Traits\ResponseAsJson;
use App\Rules\IsAccountUnique;
use Illuminate\Foundation\Http\FormRequest;

class RequestAccount extends FormRequest
{
    use ResponseAsJson;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                new IsAccountUnique()
            ],
        ];
    }
}
