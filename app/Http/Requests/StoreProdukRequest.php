<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProdukRequest extends FormRequest
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
            'name' => 'required|string|max:225',
            'show_in_transaction' =>'required|boolean',
            'use_stock' =>'required|boolean',
            'stock'=> 'integer|min:0',
            'code'=>'required|string',
            'basic_price'=>'required|integer',
            'selling_price' =>'required|integer',
            'category'=>'nullable|string',
            'picture'=>'nullable|string'
        ];
    }
}
//  name, stock, code, basic_price, dan selling_price.
