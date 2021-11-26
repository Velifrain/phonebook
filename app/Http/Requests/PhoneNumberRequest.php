<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneNumberRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'phone_number.required' => 'Телефонный номер являеться обязательным',
            'phone_number.regex' => 'Телефонный номер не должно быть менше 10 символов',
        ];
    }
}
