<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:150',
            'surname' => 'required|max:150',
            'address' => 'required|max:150',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле имя являеться обязательным',
            'name.max' => 'Поле имя не должно превышать больше 150 символов',
            'surname.required' => 'Поле фамилия являеться обязательным',
            'surname.max' => 'Поле фамилия не должно превышать больше 150 символов',
            'address.required' => 'Поле адреса являеться обязательным',
            'address.max' => 'Поле адреса не должно превышать больше 150 символов',
            ];
    }
}
