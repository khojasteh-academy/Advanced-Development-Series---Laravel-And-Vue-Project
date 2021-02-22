<?php

namespace Modules\Links\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class CreateLinkRequest extends FormRequest
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
            'parentName'   =>  [
                'sometimes', 'required', 'string'
            ],
            'parentCode'   =>  [
                'sometimes', 'required', 'numeric'
            ],
            'linkName'   =>  [
                'sometimes', 'required', 'string'
            ],
            'linkShortDesc'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'linkBody'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'linkFormat'   =>  [
                'sometimes', 'required', 'boolean'
            ],
            'linkIconName'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'childDetail.gotParent'   =>  [
                'sometimes', 'required', 'boolean'
            ],
            'childDetail.linkParent'   =>  [
                'sometimes', 'nullable', 'numeric'
            ],
            'childDetail.linkTitle'   =>  [
                'sometimes', 'required', 'string'
            ],
            'childDetail.linkURL'   =>  [
                'sometimes', 'required', 'url'
            ],
            'childDetail.linkIcon'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'childDetail.linkTarget'   =>  [
                'sometimes', 'required', 'string'
            ],
            'childDetail.linkDescription'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'childDetail.linkRelationship'   =>  [
                'sometimes', 'nullable', 'string'
            ],
            'childDetail.linkOrder'   =>  [
                'sometimes', 'required', 'numeric'
            ],
            'childDetail.linkVisibility'   =>  [
                'sometimes', 'nullable', 'boolean'
            ],
        ];
    }

    public function messages()
    {
        return [
            'childDetail.linkURL.required'  =>  'Link address is required',
            'childDetail.linkURL.url'   =>  'We can not accept this url, Please try wth a valid url address'
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
