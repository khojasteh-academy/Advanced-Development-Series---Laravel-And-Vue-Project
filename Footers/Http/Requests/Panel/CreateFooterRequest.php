<?php

namespace Modules\Footers\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class CreateFooterRequest extends FormRequest
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
            'footerCols'   =>  [
                'sometimes'  , 'required'  ,   'boolean'
            ],
            'footerName'   =>  [
                'sometimes'  , 'required'  ,   'string'
            ],
            'columnName'   =>  [
                'sometimes'  , 'required'  ,   'string'
            ],
            'columnOrder'   =>  [
                'sometimes'  , 'required'  ,   'numeric'
            ],
            'footerCode'   =>  [
                'sometimes'  , 'required'  ,   'numeric'
            ],
            'widgetType'   =>  [
                'sometimes'  , 'required'  ,   'string'
            ],
            'widgetContent'   =>  [
                'sometimes'  , 'nullable'  ,   'string'
            ],
            'contentCode'   =>  [
                'sometimes'  , 'nullable'  ,   'numeric'
            ],
            'columnCode'   =>  [
                'sometimes'  , 'required'  ,   'numeric'
            ],
            'widgetName'   =>  [
                'sometimes'  , 'required'  ,   'string'
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
