<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'college',
        'name',
        'email',
        'course',
        'phone',
        'message',
        'source_page'
    ];
}
