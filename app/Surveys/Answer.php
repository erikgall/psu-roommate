<?php

namespace App\Surveys;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'questions_id', 'position', 'score'];

  public function question() {

    return $this->belongsTo(Question::class);

  }
}
