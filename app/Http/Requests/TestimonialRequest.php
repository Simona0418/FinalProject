<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'testimonial_text' => 'required|string',
            'client_name' => 'required|string',
            'client_position' => 'required|string',
            'client_company' => 'required|string',
            'client_profile_picture' => 'required|string|max:255',
        ];
    }
}
