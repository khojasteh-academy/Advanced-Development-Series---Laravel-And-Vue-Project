<?php

namespace Modules\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreateRequest extends FormRequest
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
                'required', 'string',   'max:150'
            ],
            'userEmail'  =>  [
                'required', 'string',   'email',    'unique:users,email'
            ],
            'userPassword'  =>  [
                'required', 'string',   'min:8',    'confirmed'
            ],
            'userStatus'  =>  [
                'required', 'boolean'
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
