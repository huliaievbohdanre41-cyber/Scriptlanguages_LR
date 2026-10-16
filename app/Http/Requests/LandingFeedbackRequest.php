<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class LandingFeedbackRequest extends FormRequest
{
    public function authorize(): bool{return true;}
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^\+?380\d{9}$/'], // Додано поле телефону з валідацією
            'message' => ['required', 'string', 'min:10'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Будь ласка, вкажіть ваше ім’я.',
            'email.required' => 'Введіть електронну пошту.',
            'email.email' => 'Введіть коректну адресу електронної пошти.',
            'phone.regex' => 'Номер телефону не відповідає формату +380XXXXXXXXX.',
            'message.required' => 'Текст звернення не може бути порожнім.',
            'message.min' => 'Текст звернення повинен містити щонайменше 10 символів.',
        ];
    }
}
