<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'email' => 'required|email',
            'nome' => 'required',
            'subject' => 'nullable|string',
            'message' => 'required',
        ];
    }
    public function messages(){
        return[
            'email.required'=>'l\'email deve esistere',
            'nome.required'=>'il nome deve esistere',
            'message.required'=>'un testo minimo deve esistere',
        ];
    }
}
