<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plants extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'status',
        'stocks',
        'remarks',
        'user_id',
        'published_at',
        'price',
        'description',


    ];

    
    protected static function boot()
    {
        parent::boot();


        // Set the published_at attribute before creating the record
        static::creating(function ($model) {
            $model->published_at = now()->timezone('Asia/Manila')->toDateTimeString();
        });
    }
}


