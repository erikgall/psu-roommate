<?php

namespace App\Users;

use App\Surveys\Response;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $dates = ['dob'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'school_id',
        'gender_id',
        'dob',
        'academic_status_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function academicStatus()
    {

        return $this->belongsTo(AcademicStatus::class);

    }
  
    public function gender()
    {

        return $this->belongsTo(Gender::class);

    }

    public function photos()
    {

        return $this->hasMany(Photo::class);

    }

    public function school()
    {

        return $this->belongsTo(School::class);

    }

    public function responses()
    {

        return $this->hasMany(Response::class);

    }

}
