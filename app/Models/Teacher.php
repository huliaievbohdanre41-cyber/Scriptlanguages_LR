<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'full_name',
        'department',
        'academic_title',
        'email',
        'experience_years',
    ];

    protected $casts = [
        'experience_years' => 'integer',
    ];
}
