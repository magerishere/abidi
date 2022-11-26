<?php

namespace App\Http\Requests\Back;

use App\Enums\UserPermissionEnums;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can(UserPermissionEnums::CREATE_USER);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255', 'unique:users,email'],
            'mobile' => ['required', 'digits:11', 'unique:users,mobile'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
            'image' => ['nullable', 'image'],
        ];
    }
}
