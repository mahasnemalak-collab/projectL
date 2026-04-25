<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sciencedegree extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'body_parts',
        'info_inter',
        'info_expert',
        'Physics',
        'Chemistry'

    ];
    protected $attributes = [
        'body_parts' => 0,
        'info_inter' => 0,
        'info_expert' => 0,
        'Physics' => 0,
        'Chemistry' => 0
    ];
}
