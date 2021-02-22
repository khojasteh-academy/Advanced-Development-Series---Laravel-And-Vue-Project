<?php

namespace Modules\Terms\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
                'required', 'boolean'
            ],
            'parent'   =>  [
                'sometimes', 'required', 'numeric'
            ],
            'categorySlug'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'categoryName'   =>  [
                'sometimes', 'required', 'string'
            ],
            'categoryDescription'   =>  [
                'sometimes', 'nullable', 'string'
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
