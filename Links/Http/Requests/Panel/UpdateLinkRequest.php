<?php

namespace Modules\Links\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLinkRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'linkFormat'    =>  [
                'required'  ,   'boolean'
            ],
            'linkName'    =>  [
                'required'  ,   'string'
            ],
            'linkBody'    =>  [
                'nullable'  ,   'string'
            ],
            'linkShortDesc'    =>  [
                'nullable'  ,   'string'
            ],
            'linkIcon'    =>  [
                'required'  ,   'boolean'
            ],
            'linkIconName'    =>  [
                'nullable'  ,   'string'
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
