<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'test_code',
        'disorders',
        'turnaround',
        'preferred_specimen',
        'alternate_specimens',
        'genes',
        'color'
    ];

    protected $casts = [
        'disorders' => 'array',
        'genes' => 'array'
    ];
}
