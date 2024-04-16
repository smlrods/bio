<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $testimonial = $this->route('testimonial');

        return $testimonial && $testimonial->user_id === $this->user()->id;
    }
}
