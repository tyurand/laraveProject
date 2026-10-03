<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    //Внутри класса FormRequest метод getValidatorInstance() сам обращается к методам вашего класса:
    //Laravel автоматически находит метод rules() в классе ContactRequest и забирает из него массив с правилами.   
    //Laravel ищет стандартный метод messages() в классе для загрузки кастомных сообщений об ошибках.
    public function rules(): array
    {
        return [
            'name'=> 'required|min:2|max:50',                  //'required|min:2|max:50', === ['required','min:2','max:50'],
            'email'=> 'required|min:8|max:100|email',
            'message'=> 'required|max:2000',
        ];
    }
    
    public function messages(): array
    {
        return [
        'name.required' => 'Пожалуйста введите имя ',
        'name.min' => 'Имя должно быть не менее 2 символов',
        'name.max' => 'Имя должно быть не больше 50 символов',
        'email.required' => 'Пожалуйста введите email ',
        'email.email' => 'Пожалуйста введите корректный email ',
        'email.min' => 'email должно быть не менее 8 символов',
        'email.max' => 'email должно быть не больше 100 символов',
        'message.required' => 'Пожалуйста введите сообщение ',
        'message.max' => 'Слишком много символов',
        ];
    }
}
