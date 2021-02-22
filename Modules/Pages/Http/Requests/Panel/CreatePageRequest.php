<?php

namespace Modules\Pages\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class CreatePageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pageName'  =>  [
                'required'  ,   'string'
            ],
            'pageStatus'  =>  [
                'required'  ,   'boolean'
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
