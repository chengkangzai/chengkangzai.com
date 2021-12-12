<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateUserPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape(['name' => "string[]", 'old_password' => "string[]", 'new_password' => "string[]"])]
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'old_password' => ['required', 'password:web'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed']
        ];
    }
}
