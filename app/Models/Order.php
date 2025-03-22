<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    function user(){
        return $this->belongTo(User::class)->withDefault();
    }

    function order_details() {
        return $this->HasMany(order_Detail::class);
    }
    function payment() {
        return $this->hasOne(paymentl::class);
    }
}

