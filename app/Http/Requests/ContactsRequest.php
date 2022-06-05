<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'name' => 'required|max:20',
            'email' => 'required|regex:/^.+@.+$/i',
            'phone' => ['required', 'regex:/^[+]380[0-9]{9}$/i'],
            'card' => ['required', 'regex:/^[0-9]{16}$/i'],
            'month' => ['required', 'regex:/^0[1-9]|1[012]$/i'],
            'year' => ['required', 'regex:/^2[3-8]$/i'],
            'code' => ['required', 'regex:/^[0-9]{3}$/i']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле імені є обов`язковим!',
            'name.max:20' => 'Ваше ім`я не має перебільшувати 20 символів!',
            'email.required' => 'Поле пошти є обов`язковим!',
            'email.regex' => 'Введіть пошту коректно!',
            'phone.required' => 'Поле телефону є обов`язковим!',
            'phone.numeric' => 'Поле телефону має мати правильний формат!',
            'phone.regex' => 'Введіть номер телефону коректно!',
            'card.required' => 'Поле картки є обов`язковим!',
            'card.regex' => 'Ваш номер картки має містити 16 цифр !',
            'month.required' => 'Поле місяця терміну дії картки є обов`язковими!',
            'year.required' => 'Поле року терміну дії картки є обов`язковими!',
            'month.regex' => 'Введіть поле місяця терміну дії картки коректно!',
            'year.regex' => 'Введіть поле року терміну дії картки коректно!',
            'code.required' => 'Поле коду картки є обов`язковим!',
            'code.regex' => 'Ваш код картки має містити три цифри!'
        ];
    }
}
