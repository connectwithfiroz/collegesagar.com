<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'college',
        'name',
        'email',
        'course',
        'phone',
        'message',
        'source_page',
        'ip_address',
        'college_id',
        'course_id',
        'specialization_id'
    ];
    public function college()
    {
        return $this->belongsTo(College::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
}
