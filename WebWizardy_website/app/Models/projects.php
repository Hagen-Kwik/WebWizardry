<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'project_name',
        'package_id',
        'requirements_id',
        'progress percentage',
        'status',
        'payment_picture',
        'payment_status',
        'user_id',
        'project start',
        'project end'
    ];
}
