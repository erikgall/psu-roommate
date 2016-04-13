<?php

namespace App\Surveys;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'answer_id'];

  public function answer() {

    return $this->belongsTo(Answer::class);
    
  }

  public function user() {

    return $this->belongsTo(User::class);

  }

}
