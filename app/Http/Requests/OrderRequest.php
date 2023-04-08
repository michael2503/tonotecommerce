<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['string', 'max:150'],
            'last_name' => ['string', 'max:150'],
            'email' => ['email', 'max:150'],
            'phone' => ['string', 'max:150'],
            'address' => ['string'],
            'bus_stop' => ['string', 'max:150'],
            'city' => ['string', 'max:150'],
            'state' => ['string', 'max:150'],
            'country' => ['string', 'max:150'],
            'payment_method' => ['string', 'max:150'],
        ];
    }
}
