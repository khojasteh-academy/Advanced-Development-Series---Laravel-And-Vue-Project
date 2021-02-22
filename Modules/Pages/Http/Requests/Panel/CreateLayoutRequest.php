<?php

namespace Modules\Pages\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class CreateLayoutRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pageType'  =>  [
                'required', 'string'
            ],
            'pageSize'  =>  [
                'nullable', 'numeric'
            ],
            'itemParent'  =>  [
                'required', 'numeric'
            ],
            'pageCode'  =>  [
                'required', 'numeric'
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
