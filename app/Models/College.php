<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'cover_image',
        'description',
        'address',
        'website',
        'phone',
        'email',
        'established_year',
        'approved_by',
        'is_featured',
        'status'
    ];

    protected $casts = [
        'approved_by' => 'array',
        'is_featured' => 'boolean',
        'status' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */

    public function getLogoUrlAttribute()
    {
        return $this->logo
            ? asset('storage/' . $this->logo)
            : null;
    }

    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image
            ? asset('storage/' . $this->cover_image)
            : null;
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
    public function collegeCourses()
    {
        return $this->hasMany(CollegeCourse::class);
    }
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($college) {
            $college->slug = \Str::slug($college->name);
        });
    }
}
