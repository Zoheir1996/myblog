<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255|email',
        
            //
        ];
    }

    public function message(){
        return [
            'name.required' =>'Le champ Name est requis',
            'email.required' =>'Le champs Email est requis',
            'email.email' => 'L\'email renseigné n\'est pas valide !',
            'email.min' => 'Ce champ doit faire au moins 5 caracteres'
        ];
    }
}

