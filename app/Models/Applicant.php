<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicantFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'phone_number',
        'user_id'
    ];

    public function User()
    {
        return $this->belongTo(User::class);
    }

    public function Application()
    {
        return $this->hasOne(Application::class);
    }
}
