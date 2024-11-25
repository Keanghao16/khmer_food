<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ProfilePasswordUpdateRequest extends FormRequest
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
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:5', 'confirmed']
        ];
    }
    function messages(): array
    { //replaces original toastr message for current_password when user enters wrong password
        return [
            'current_password.current_password' => 'Current password is invalid' //calls inputname.rulename (not to be confused cuz laravel rulename is like that)
        ];
    }
}
