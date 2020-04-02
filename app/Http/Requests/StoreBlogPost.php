<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|unique:posts,title',
            'description' => 'required|min:10',
            'user_id' => 'exists:users,id',
        ];
    }
    public function messages()
    {
        return [
            'title.min' => "title must be at least 3 charachters",
            'description' => "description must be at at least 10 characters"
        ];
    }

    
}
