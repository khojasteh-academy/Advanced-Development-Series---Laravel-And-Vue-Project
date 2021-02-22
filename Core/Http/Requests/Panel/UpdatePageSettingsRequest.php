<?php

namespace Modules\Core\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageSettingsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            '_default_home_page'    =>  [
                'required'  ,   'numeric'
            ],
            '_default_header'    =>  [
                'required'  ,   'string'
            ],
            '_default_footer'    =>  [
                'required'  ,   'numeric'
            ],
            '_default_footer_copyright_text'    =>  [
                'required'  ,   'string'
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
