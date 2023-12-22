<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'project_id',
        'requirement_name',
        'requirement_description',
        'status',
    ];
    
    public function requirement()
    {
        return $this->belongsTo(Requirements::class, 'requirement_id');
    }
}
