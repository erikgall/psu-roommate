<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password', 'school_id', 'gender_id'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  public function gender() {

    return $this->belongsTo(Gender::class);

  }

  public function photos() {

    return $this->hasMany(Photo::class);
    
  }

  public function school() {

    return $this->belongsTo(School::class);

  }


}
