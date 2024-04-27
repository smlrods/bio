<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Theme extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title_color',
        'description_color',
        'divisor_color',
        'testimonial_stars_color',
        'testimonial_color',
        'testimonial_author_color',
        'link_border_color',
        'link_text_color',
        'link_text_hover_color',
        'link_background_hover_color',
        'page_background_color',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
