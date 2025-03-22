<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];

    function users() {
        return $this->hasMany(user::class);

}
function permissions() {
    return $this->belongTo (Permission::class);

}
}
