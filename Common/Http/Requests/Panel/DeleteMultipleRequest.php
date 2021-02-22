<?php

namespace Modules\Common\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class DeleteMultipleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'requestType'   =>  [
                'required'  ,   'string'
            ],
            'selected'   =>  [
                'required'  ,   'array'
            ],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
