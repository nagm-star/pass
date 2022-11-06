<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'name' => 'sometimes|string',
            'key' => 'required',
            'description' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            // 'image' =>'required|image|mimes:jpeg,png,jpg|max:948',
            'address' => 'required',
        ];
    }
}
