<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowLinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $link = $this->route('link');

        return $link && $this->user()->can('view', $link);
    }
}
