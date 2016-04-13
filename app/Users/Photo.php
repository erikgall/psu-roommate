<?php

namespace App\Users;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = ['is_primary' => 'boolean'];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['filename', 'user_id', 'is_primary'];

  public function user() {

    return $this->belongsTo(User::class);
    
  }

}
