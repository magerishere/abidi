<?php

namespace App\Http\Requests\Back;

use App\Enums\UserPermissionEnums;
use Illuminate\Foundation\Http\FormRequest;

class UserRoleUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can(UserPermissionEnums::UPDATE_USER);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
