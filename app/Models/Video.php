<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'media_id',
        'youtube_url',
        'title',
        'description',
    ];

    /**
     * Get the media that owns the video.
     */
    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
