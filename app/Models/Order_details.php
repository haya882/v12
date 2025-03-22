<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $guarded = [];

    function user() {
        return $this->belongsTo(user::class)->withDefault();

    }

    function product() {
        return $this->belongsT0(product::class)->withDefault();

    }
    function order() {
        return $this->belongsT0(Order::class)->withDefault();

    }
}
