<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsedFeature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'feature_id',
        'user_id',
        'credits'
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected function casts(): array
    {
        return [
            'data' => 'array',
        ];
    }

    public function feature()  
    {
        return $this->belongsTo(Feature::class);    
    }
}
