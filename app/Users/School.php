<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'city', 'state_id'];

  public function state() {

    return $this->belongsTo(State::class);
    
  }

}

