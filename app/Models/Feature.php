<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image',
        'route_name',
        'name',
        'description',
        'required_credits',
        'active',
    ];

    protected $dates = [
        'deleted_at'
    ];
}
