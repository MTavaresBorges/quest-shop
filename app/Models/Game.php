<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'age_recommendation',
        'price',
        'stock',
        'description'
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function wishlist()
    {
        return $this->belongsToMany(User::class, 'wishlist');
    }

    public function cart()
    {
        return $this->belongsToMany(User::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'game_user');
    }
}
