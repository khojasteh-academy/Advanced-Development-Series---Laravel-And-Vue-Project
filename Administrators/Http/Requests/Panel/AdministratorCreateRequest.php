<?php

namespace Modules\Administrators\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class AdministratorCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'adminName' =>  [
                'required'  ,   'string',   'max:200'
            ],
            'adminEmail' =>  [
                'required'  ,   'string',   'email',   'max:200',   'unique:administrators,email'
            ],
            'adminPassword' =>  [
                'required'  ,   'string',   'min:8',    'confirmed'
            ],
            'adminStatus' =>  [
                'required'  ,   'boolean'
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
