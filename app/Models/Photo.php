<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'title',         // Add title to fillable properties
        'description',
        'photoable_id',
        'photoable_type',
    ];

    /**
     * Get the owning photoable model.
     */
    public function photoable()
    {
        return $this->morphTo();
    }
}

