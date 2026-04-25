<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gamesdeg extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'guess_the_sample',
        'series_numbers',
        'hiding_img',
        'discrate_words',
        'guess_the_country'
    ];

    protected $attributes = [
        'guess_the_sample' => 0,
        'series_numbers' => 0,
        'hiding_img' => 0,
        'discrate_words' => 0,
        'guess_the_country' => 0
    ];
}
