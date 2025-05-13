<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DealerRequest extends FormRequest
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
            'sort_id' => 'required|min:1',
            'dealership_name' => 'required|string|min:3|max:255',
            'address' => 'required|string|min:3|max:255',
            'pincode' => 'required|digits:6',
            'state' => 'required|string|min:2|max:100',
            'city' => 'required|string|min:2|max:100',
            'contact_name' => 'required|string|min:3|max:255',
            'contact_number' => 'required',
            'contact_number2' => 'nullable', 
            'contact_email' => 'required|email|max:255',
            'url' => 'required|string|min:3|max:1000',
            'latitude' => 'nullable|numeric|min:1',
            'longitude' => 'nullable|numeric|min:1',
        ];
    }
}
