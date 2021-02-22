<?php

namespace Modules\Images\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class DeletePhyscalImageRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'imgURL'    =>  [
                'required', 'string'
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
