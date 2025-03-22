<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

    function user(){
        return $this->belongTo(User::class)->withDefault();
    }

function order() {
        return $this->belongTo(Order::class)->withDefault();
    }

}
