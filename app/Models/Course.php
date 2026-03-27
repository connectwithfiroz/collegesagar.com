<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'slug', 'level', 'description'];

    public function specializations()
    {
        return $this->hasMany(Specialization::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = \Str::slug($model->name);
        });
    }
}
