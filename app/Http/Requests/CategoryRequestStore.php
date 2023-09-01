<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:8|max:255',
            'status'=>'required|numeric',
            'description' =>'required',
            'img' => 'image|required|mimes:jpeg,png,jpg,webp,gif,svg|max:2048'
        ];
    }
}
