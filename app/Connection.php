<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Connection extends Model
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
    return $this->belongsToMany('App\Pedal')->withTimestamps();
  }

  public function shifter() {
    return $this->belongsToMany('App\Shifter')->withTimestamps();
  }

  public function brake() {
    return $this->belongsToMany('App\Brake')->withTimestamps();
  }
}
