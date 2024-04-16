<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditLinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $link = $this->route('link');

        return $link && $this->user()->can('update', $link);
    }
}
