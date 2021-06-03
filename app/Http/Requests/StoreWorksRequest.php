<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorksRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'tags' => ['array'],
            'picture' => ['required', 'mimes:jpg,bmp,png,jpeg,gif'],
            'url' => ['nullable', 'string'],
            'github_url' => ['nullable', 'string'],
            'status' => ['required', 'string']
        ];
    }
}
