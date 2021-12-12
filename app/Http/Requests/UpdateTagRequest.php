<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class UpdateTagRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape(['name' => "string[]"])]
    public function rules(): array
    {
        return [
            'name' => ['required', 'string']
        ];
    }
}
