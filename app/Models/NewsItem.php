<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'published_at',
        'user_id',
    ];

    // Zorgt ervoor dat published_at een Carbon datum is
    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Relatie met user (admin)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
