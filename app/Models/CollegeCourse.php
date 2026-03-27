<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeCourse extends Model
{
    protected $fillable = [
        'college_id',
        'course_id',
        'specialization_id',
        'fees',
        'duration',
        'duration_type',
        'eligibility',
        'admission_process',
        'seats',
        'placement_avg',
        'placement_highest'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
