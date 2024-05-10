<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LlumarWindowFilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:2|max:200',
            'last_name' => 'required|string|min:2|max:200',
            'project_type' => 'required',
            'type_of_film' => 'required',
            'company_name' => 'required|string|min:2|max:200',
            'state' => 'required',
            'whatsapp_number' => 'required|numeric|digits:10',
            'mobile' => 'required|numeric|digits:10',
            'email' => 'required|email|min:5|max:200',
        ];
    }
}
