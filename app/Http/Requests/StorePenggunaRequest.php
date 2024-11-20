<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePenggunaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:225',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone_number' => 'required|string|max:225',
            'jenis_pengguna' => Rule::in(['admin','kasir','pembeli']),
            'referal_code' => 'string:max:5'
        ];
    }
}
