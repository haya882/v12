<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    function role() {
        return $this->belongsTo(Category::class)->withDefault() ;
    }

        function image() {
            return $this->morphOne(Image::class , 'imageable' )->where('type', 'main');

        }

        function gallery() {
            return $this->morphMany(Image::class , 'imageable' )->where('type', 'gallery') ;
        }

        function reviews() {
            return $this->HasMany(Review::class);
        }
        function order_details() {
            return $this->HasMany(order_Detail::class);
        }

        function getImgPathAttribute() {
            $url = 'https://via.placeholder.com/100×80';
            if($this->image) {
                $url = asset('images/'.
                $this->image->path);
            }
            return $url;
        }

    }








