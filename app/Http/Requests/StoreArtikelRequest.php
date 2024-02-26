<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreArtikelRequest extends FormRequest
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
        $rules = [
            'titel' => ['required', 'unique:artikels,titel',
                Rule::unique('artikels', 'titel')->where('user_id', $this->input('user_id'))
            ],
            'inhoud' => 'required',
            'tag_id' => 'required',
            'game_id' => 'required',
            'categorie_id' => 'required',
        ];

        if ($this->isMethod('post')) {
            $rules['artikel_id'] = 'required';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['artikel'] = 'required';
        }

        return $rules;
    }

    public function messages() {
        return [
            'titel.unique' => 'This title for news is already in use!'
        ];
    }

}
