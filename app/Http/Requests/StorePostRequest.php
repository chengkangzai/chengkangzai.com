<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    #[ArrayShape(['title' => "string[]", 'tags' => "string[]", 'status' => "string[]", 'content' => "string[]"])]
    public function rules(): array
    {
        return [
            'title' => ['string', 'required', 'max:255'],
            'tags' => ['array'],
            'status' => ['required', 'string'],
            'content' => ['required', 'string']
        ];
    }
}
