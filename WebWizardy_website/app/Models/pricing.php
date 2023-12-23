<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pages',
        'assets',
        'maintanance',
        'add ons',
        'hosting',
        'price',
    ];
}
