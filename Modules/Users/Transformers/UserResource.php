<?php

namespace Modules\Users\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'userCode'  =>  $this->id,
            'userName'  =>  $this->name,
            'userEmail'  =>  $this->email,
            'userStatus'  =>  $this->status ? true : false,
            'userCreatedAt'  =>  $this->created_at->format('H:s / Y-m-d'),
            'userUpdatedAt'  =>  $this->updated_at->format('H:s / Y-m-d'),
            'passwordTooltip'  =>  false, // For FrontEnd
        ];

    }
}
