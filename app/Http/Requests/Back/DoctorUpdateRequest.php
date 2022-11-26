<?php

namespace App\Http\Requests\Back;

use App\Enums\UserPermissionEnums;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class DoctorUpdateRequest extends FormRequest
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
        $doctorId = $this->route('doctor');
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255', "unique:users,email,$doctorId"],
            'mobile' => ['required', 'digits:11', "unique:users,mobile,$doctorId"],
            'image' => ['nullable', 'image'],
            'bio' => ['nullable', 'string'],
        ];
    }
}
