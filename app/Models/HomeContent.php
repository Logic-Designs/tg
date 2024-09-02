<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'num_of_yesrs',
        'num_of_projects',
        'num_of_units',
        'contact_us_description'
    ];
}
