<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = ['course_id', 'name', 'slug', 'description'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = \Str::slug($model->name);
        });
    }
    // College::whereHas('locations', function ($q) {
    //     $q->where('city', 'Ahmedabad');
    // })
    // ->whereHas('collegeCourses', function ($q) {
    //     $q->where('course_id', 1)
    //     ->where('specialization_id', 1)
    //     ->where('fees', '<=', 300000);
    // })
    // ->get();
}
