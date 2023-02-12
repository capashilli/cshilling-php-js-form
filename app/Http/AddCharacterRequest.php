<?php

namespace App\Http\Requests;

use App\Models\Character;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255', Rule::unique(Character::class)],
            'ancestry' => ['string', 'max:255'],
            'background' => ['string', 'max:255'],
            'character_class' => ['string', 'max:255'],
        ];
    }
}
