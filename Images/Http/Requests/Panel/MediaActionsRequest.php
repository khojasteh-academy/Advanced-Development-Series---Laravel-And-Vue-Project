<?php

namespace Modules\Images\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class MediaActionsRequest extends FormRequest
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
                'required'  ,   'string'
            ],
            'fileName'   =>  [
                'sometimes'  ,   'required', 'string'
            ],
            'postCode'   =>  [
                'sometimes'  ,   'required', 'numeric'
            ],
            'usageId'   =>  [
                'sometimes'  ,   'required', 'numeric'
            ],
            'fileCode'   =>  [
                'sometimes'  ,   'required', 'numeric'
            ],
            'imageForm'   =>  [
                'sometimes'  ,   'required', 'array',    'min:4'
            ],
            'imageForm.postCode'   =>  [
                'sometimes'  ,   'required'  ,   'numeric'
            ],
            'imageForm.imgType'   =>  [
                'sometimes'  ,   'required'  ,   'string'
            ],
            'imageForm.imgAlternate'   =>  [
                'sometimes'  ,   'nullable'  ,   'string'
            ],
            'imageForm.imgDescription'   =>  [
                'sometimes'  ,   'nullable'  ,   'string'
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
