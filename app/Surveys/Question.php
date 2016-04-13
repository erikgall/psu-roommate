<?php

namespace App\Surveys;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'position'];

  public function answers() {

    return $this->hasMany(Answer::class);
    
  }

  public function responses() {

    return $this->hasManyThrough(Response::class, Answer::class);
  }

}
