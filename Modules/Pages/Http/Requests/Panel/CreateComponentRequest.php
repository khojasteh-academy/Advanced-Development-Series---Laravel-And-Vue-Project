<?php

namespace Modules\Pages\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class CreateComponentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'widgetName'    =>  [
                'nullable', 'string'
            ],
            'formData'    =>  [
                'required'
            ],
//            'formData.*.postStyle'    =>  [
//                'required', 'string'
//            ],
            'formType'    =>  [
                'required', 'string'
            ],
            'layoutCode'    =>  [
                'nullable', 'numeric'
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
