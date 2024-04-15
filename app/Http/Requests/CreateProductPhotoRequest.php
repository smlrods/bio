<?php

namespace App\Http\Requests;

use App\Models\ProductPhoto;
use Illuminate\Foundation\Http\FormRequest;

class CreateProductPhotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', ProductPhoto::class);
    }
}
