<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateRoleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape(['name' => "string", 'permissions' => "string", 'permissions.*' => "string"])]
    public function rules(): array
    {
        return [
            'name' => 'required|unique:roles,name,' . $this->route('role')->id,
            'permissions' => 'array',
            'permissions.*' => 'integer|exists:permissions,id',
        ];
    }
}
