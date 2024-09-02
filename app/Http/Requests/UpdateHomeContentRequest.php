<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeContentRequest extends FormRequest
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
            'title'=> 'nullable|string|max:100',
            'description'=> 'nullable|string',
            'image'=> 'nullable|image',
            'num_of_yesrs'=> 'nullable|integer',
            'num_of_projects'=> 'nullable|integer',
            'num_of_units'=> 'nullable|integer',
            'contact_us_description'=> 'nullable|string',
        ];
    }
}
