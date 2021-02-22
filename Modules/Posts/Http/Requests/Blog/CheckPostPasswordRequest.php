<?php

namespace Modules\Posts\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class CheckPostPasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'postCode'  =>  [
                'required', 'numeric'
            ],
            'postPassword'  =>  [
                'required', 'string'
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
