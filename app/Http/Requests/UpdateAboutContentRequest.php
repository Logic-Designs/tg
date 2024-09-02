<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutContentRequest extends FormRequest
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
            'about'=> 'required|string',
            'mission'=> 'required|string',
            'vission'=> 'required|string',
            'career_title'=> 'required|string',
            'career_content'=> 'required|string',
        ];
    }
}
