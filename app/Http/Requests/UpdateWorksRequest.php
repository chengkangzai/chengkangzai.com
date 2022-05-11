<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateWorksRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape(['name' => "string[]", 'description.en' => "string[]", 'description.zh' => "string[]", 'tags' => "string[]", 'picture' => "string[]", 'url' => "string[]", 'github_url' => "string[]", 'status' => "string[]"])]
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'description.en' => ['required', 'string'],
            'description.zh' => ['required', 'string'],
            'tags' => ['array'],
            'picture' => ['mimes:jpg,bmp,png,jpeg,gif'],
            'url' => ['nullable', 'string'],
            'github_url' => ['nullable', 'string'],
            'status' => ['required', 'string'],
        ];
    }
}
