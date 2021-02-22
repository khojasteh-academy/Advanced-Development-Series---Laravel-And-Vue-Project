<?php

namespace Modules\Auth\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'userName'  =>  [
                'required', 'string'    ,   'max:200'
            ],
            'userEmail'  =>  [
                'required', 'string'    ,   'email'    ,   'max:200' ,   'unique:users,email'
            ],
            'userPassword'  =>  [
                'required', 'string'    ,   'min:8' ,   'confirmed'
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
