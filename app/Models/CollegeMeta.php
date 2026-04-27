<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeMeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'college_id',
        'meta_key',
        'meta_value'
    ];
}
