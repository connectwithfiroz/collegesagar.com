<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['city', 'state', 'slug'];

    public function colleges()
    {
        return $this->belongsToMany(College::class);
    }
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($location) {
            $location->slug = \Str::slug($location->city . '-' . $location->state);
        });
    }
}
