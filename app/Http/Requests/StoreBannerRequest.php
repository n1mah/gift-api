<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=>"required|string|max:127",
            'description'=>"required|string|max:127",
            'link'=>"required|string|max:1024",
            'color_from'=>"string|max:63",
            'color_main'=>"string|max:63",
            'color_to'=>"string|max:63",
            'logo_name'=>"string|max:127",
            'logo'=>"required|string|max:1024",
        ];
    }
}
