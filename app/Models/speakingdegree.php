<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speakingdegree extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'understanding_kids',
        'understanding_intermediate',
        'understanding_expert'

    ];
    protected $attributes = [
        'understanding_kids' => 0,
        'understanding_intermediate' => 0,
        'understanding_expert' => 0
    ];
}
