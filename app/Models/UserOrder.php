<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;

    protected $table = 'user_orders';

    public $timestamps = false;

    protected $fillable = [
        'order_id',
        'amount',
        'timestamp',
        'status',
    ];
}
