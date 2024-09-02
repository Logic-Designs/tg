<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=> 'nullable|email',
            'phone'=> 'nullable|string',
            'phone2'=> 'nullable|string',
            'address'=> 'nullable|string',
            'map'=> 'nullable|string',
            'social' => 'nullable|array',
            'social.icon.*' => 'nullable|string',
            'social.url.*' => 'nullable|url',

        ];
    }
}
