<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationFactory> */
    use HasFactory;

    protected $fillable = [
        'application_id',
        'course_id',
        'status'
    ];

    public function Applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}
