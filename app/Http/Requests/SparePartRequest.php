<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SparePartRequest extends FormRequest
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
            'name' => 'required', 
            'main_category' => 'required',
            'sec_category' => 'required',
            'thr_category' => 'required',
            'sub_comp' => 'required',
            'price' => 'required',
            'supplier' => 'required',
        ];
    }
}
