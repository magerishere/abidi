<?php

namespace App\Http\Requests\Back;

use App\Enums\UserPermissionEnums;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class UserUpdateRequest extends FormRequest
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
        $userId = $this->user->id;
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', "unique:users,email,$userId"],
            'mobile' => ['required', 'digits:11', "unique:users,mobile,$userId"],
            'image' => ['nullable', 'image'],
        ];
    }
}
