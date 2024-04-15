<?php

namespace App\Http\Requests;

use App\Models\ProductPhoto;
use Illuminate\Foundation\Http\FormRequest;

class ViewProductPhotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $productPhoto = $this->route('product_photo');

        return $productPhoto && $this->user()->can('view', $productPhoto);
    }
}
