<?php

namespace Modules\Terms\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
                'required', 'string'
            ],
            'categoryParentStatus'   =>  [
                'sometimes', 'required', 'boolean'
            ],
            'categoryParentCode'   =>  [
                'sometimes', 'nullable', 'numeric'
            ],
            'categorySlug'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'categoryName'   =>  [
                'sometimes', 'required', 'string'
            ],
            'categoryDescription'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'postCode'   =>  [
                'sometimes', 'required', 'numeric'
            ],
            'categoryCode'   =>  [
                'sometimes', 'required', 'numeric'
            ],
            'multipleCategories'   =>  [
                'sometimes', 'required', 'array'
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
