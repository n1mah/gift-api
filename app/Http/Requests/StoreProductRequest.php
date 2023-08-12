<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'brand_id'=>"required|exists:brands,id",
            'title_en'=>"required|string|max:127",
            'description'=>"required|string|max:127",
            'period'=>"required|string|max:127",
            'period_title'=>"required|string|max:127",
            'price'=>"required|string|max:127",
        ];
    }
}
