<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateThemeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_color' => 'sometimes|string|max:7',
            'description_color' => 'sometimes|string|max:7',
            'divisor_color' => 'sometimes|string|max:7',
            'testimonial_stars_color' => 'sometimes|string|max:7',
            'testimonial_color' => 'sometimes|string|max:7',
            'testimonial_author_color' => 'sometimes|string|max:7',
            'link_border_color' => 'sometimes|string|max:7',
            'link_text_color' => 'sometimes|string|max:7',
            'link_text_hover_color' => 'sometimes|string|max:7',
            'link_background_hover_color' => 'sometimes|string|max:7',
            'page_background_color' => 'sometimes|string|max:7',
        ];
    }
}
