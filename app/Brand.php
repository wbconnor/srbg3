<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name'
  ];

  protected $dates = ['deleted_at'];

  // Relationships
  public function pedal() {
    return $this->hasMany('App\Pedal')->withTimestamps();
  }

  public function brake() {
    return $this->hasMany('App\Brake')->withTimestamps();
  }

  public function wheel() {
    return $this->hasMany('App\Wheel')->withTimestamps();
  }

  public function shifter() {
    return $this->hasMany('App\Shifter')->withTimestamps();
  }
}
