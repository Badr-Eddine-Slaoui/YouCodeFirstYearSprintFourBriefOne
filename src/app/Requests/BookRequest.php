<?php

namespace App\Requests;

use Foundations\Request\FormRequest;

class BookRequest extends FormRequest {
    public static function authorize(): bool {
        return true;
    }

    public static function rules(): array {
        return [
            "title"=> "required|string|between:3,255",
            "author"=> "required|string|between:3,150",
            "year"=> "required|int|between:1000,2099",
            "status"=> "required|in:available,borrowed",
            "image_url"=> "required|string|between:3,255",
            "description"=> "required|string|min:3",
        ];
    }

    public static function messages(): array {
        return [
            "title.required"=> "Title is required",
            "title.string"=> "Title must be a string",
            "title.between"=> "Title must be between 3 and 255 characters",
            "author.required"=> "Author is required",
            "author.string"=> "Author must be a string",
            "author.between"=> "Author must be between 3 and 150 characters",
            "year.required"=> "Year is required",
            "year.int"=> "Year must be an integer",
            "year.between"=> "Year must be between 1000 and 2099",
            "status.required"=> "Status is required",
            "status.in"=> "Status must be 'available' or 'borrowed'",
            "image_url.required"=> "Image URL is required",
            "image_url.string"=> "Image URL must be a string",
            "image_url.between"=> "Image URL must be between 3 and 255 characters",
            "description.required"=> "Description is required",
            "description.string"=> "Description must be a string",
            "description.min"=> "Description must be at least 3 characters",
        ];
    }
}