<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'abbreviation'];

}
