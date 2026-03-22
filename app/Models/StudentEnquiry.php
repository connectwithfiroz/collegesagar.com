<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'target_college',
        'name',
        'email',
        'phone',
        'ip_address'
    ];
}
