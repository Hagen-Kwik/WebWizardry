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
        'pricing_id',
        'requirements_id',
        'progress_percentage',
        'status',
        'payment_picture',
        'payment_status',
        'github',
        'website_mockup',
        'proposal',
        'user_id',
        'project start',
        'project end'
    ];

    public function pricing()
    {
        return $this->belongsTo(Pricing::class, 'pricing_id');
    }

    // Define the relationship with Requirements model if needed
    public function requirements()
    {
        return $this->hasMany(Requirements::class);
    }
}
