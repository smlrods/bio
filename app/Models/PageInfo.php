<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageInfo extends Model
{
    use HasFactory;

    protected $table = 'pages_info';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'logo_url',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
