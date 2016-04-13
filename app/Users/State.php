<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'abbreviation'];
  
}
