<?php

namespace Modules\Images\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class CreateImageRequest extends FormRequest
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
            'requestType'  =>  [
                'required', 'string'
            ],
            'imageDetail'  =>  [
                'required', 'array', 'min:3'
            ],
            'imageDetail.alternate'  =>  [
                'required', 'string'
            ],
            'imageDetail.resultURL'  =>  [
                'required', 'string'
            ],
            'imageDetail.description'  =>  [
                'required', 'string'
            ],
            'imageResizeData'  =>  [
                'required', 'array', 'min:4'
            ],
            'imageResizeData.allowWidth'  =>  [
                'required', 'boolean'
            ],
            'imageResizeData.allowHeight'  =>  [
                'required', 'boolean'
            ],
            'imageResizeData.imgWidth'  =>  [
                'required', 'numeric'
            ],
            'imageResizeData.imgHeight'  =>  [
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
