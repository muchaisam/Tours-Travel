<?php

namespace App;

use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected static function newFactory()
    {
        return UserFactory::new();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'about', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role == 'admin';
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function wishlistedDestinations()
    {
        return $this->belongsToMany(Destinations::class, 'wishlists', 'user_id', 'destination_id')
            ->withTimestamps();
    }

    public function hasWishlisted(Destinations $destination): bool
    {
        return $this->wishlist()->where('destination_id', $destination->id)->exists();
    }

    public function toggleWishlist(Destinations $destination): bool
    {
        if ($this->hasWishlisted($destination)) {
            $this->wishlist()->where('destination_id', $destination->id)->delete();

            return false;
        }

        $this->wishlist()->create(['destination_id' => $destination->id]);

        return true;
    }
}
