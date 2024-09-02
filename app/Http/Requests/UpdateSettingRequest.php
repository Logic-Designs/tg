<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'meta_keywords'=> 'nullable|string|max:100',
            'meta_title'=> 'nullable|string|max:100',
            'meta_description'=> 'nullable|string',
            'google_analytic'=> 'nullable|string',
            'footer_about'=> 'nullable|string',
            'logo'=> 'nullable|image',
        ];
    }
}
