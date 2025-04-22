<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public const ROLES = [
        'super_admin' => 'Super Admin',
        'admin' => 'Admin',
        'employee' => 'Employee',
        'customer' => 'Customer',
    ];

    public function getIsSuperAdminAttribute(): bool
{
    return $this->type === 'super_admin';
}
    function role() {
        return $this->belongsTo(Role::class)->withDefault() ;
    }
    function image() {
        return $this->morphOne(Image::class , 'imageable' )->where('type', 'main');
    }
    function reviews() {
        return $this->HasMany(Review::class);
    }
    function order() {
        return $this->HasMany(Order::class);
    }
    function order_details() {
        return $this->HasMany(order_Detail::class);
    }
    function payment() {
        return $this->HasMany(paymentl::class);
    }

    function testimonials() {
        return $this->HasMany(Testimonials::class);
    }
    public function cart()
{
    return $this->hasMany(Cart::class);
}
public function wishlist(){
    return $this->hasMany(Wishlist::class);
}
 }


