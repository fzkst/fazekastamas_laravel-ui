<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFruitRequest extends FormRequest
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
            'name' => 'required | string | max:100',
            'color' => 'required | string | max:191',
            'taste' => 'required | string | max: 191',
            'weight' => 'required | integer',
            'purch_date' => 'required | date'
        ];
    }
}
