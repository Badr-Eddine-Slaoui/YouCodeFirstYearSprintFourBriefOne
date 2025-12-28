<?php

namespace App\Requests;

use Foundations\Request\FormRequest;

class RegisterRequest extends FormRequest {
    public static function authorize(): bool {
        return true;
    }

    public static function rules(): array {
        return [
            "firstName"=> "required|string|between:3,100",
            "lastName"=> "required|string|between:3,100",
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }

    public static function messages(): array {
        return [
            'firstName.required'=> 'First name is required',
            'firstName.string'=> 'First name must be a string',
            'firstName.between'=> 'First name must be between 3 and 100 characters',
            'lastName.required'=> 'Last name is required' ,
            'lastName.string'=> 'Last name must be a string',
            'lastName.between'=> 'Last name must be between 3 and 100 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'password.required'=> 'Password is required',
            'password.min'=> 'Password must be at least 8 characters long',
        ];
    }
}