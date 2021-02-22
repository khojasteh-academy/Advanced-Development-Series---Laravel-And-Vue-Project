<?php

namespace Modules\Footers\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class RemoveFooterRequest extends FormRequest
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
            'widgetcode'    =>  [
                'sometimes',    'required'  ,   'numeric'
            ]
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
