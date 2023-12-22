<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedbacks extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'requirement_id',
        'user_id',
        'project_id',
        'feedback',
        'status'
    ];

    public function feedbacks()
    {
        return $this->hasMany(feedbacks::class, 'requirement_id');
    }
}
