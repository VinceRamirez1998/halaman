<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'user_id',
        'username',
        'total',
        'status',
        'products',
        'price',
        'quantity',
        'address',
        'delivery_fee',
        'date_created',
        'date_updated',
        'image',
    ];
}
