<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'name', 'address', 'city', 'country', 'postcode',
        'phone', 'email', 'note', 'payment_method', 'status', 'total'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class,'order_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


