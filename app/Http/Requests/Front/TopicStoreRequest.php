<?php

namespace App\Http\Requests\Front;

use App\Enums\UserPermissionEnums;
use Illuminate\Foundation\Http\FormRequest;

class TopicStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can(UserPermissionEnums::CREATE_TOPIC);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'tag' => ['nullable', 'string'],
            'rules' => ['required', 'accepted'],
        ];
    }
}
