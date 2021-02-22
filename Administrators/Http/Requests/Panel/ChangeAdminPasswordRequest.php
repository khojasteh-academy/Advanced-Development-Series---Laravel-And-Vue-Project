<?php

namespace Modules\Administrators\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class ChangeAdminPasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'adminCode' =>  [
                'required', 'numeric'
            ],
            'newPassword' =>  [
                'required', 'string', 'confirmed', 'min:8'
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
