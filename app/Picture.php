<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'url', 'cover', 'wheel_id'
  ];

  protected $dates = ['deleted_at'];

  // Relationships
  public function wheel() {
    return $this->belongsToMany('App\Wheel');
  }
}
