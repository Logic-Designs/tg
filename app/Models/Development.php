<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Development extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'image',
        'name',
        'description'
    ];

    /**
     * Get the gallery photos for the development.
     */
    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }
}
