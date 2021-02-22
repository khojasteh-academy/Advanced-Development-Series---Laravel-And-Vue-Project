<?php

namespace Modules\Core\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostSettingsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'DefaultCreatePostStatus'   =>  [
                'required'  ,   'boolean'
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
