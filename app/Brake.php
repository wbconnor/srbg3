<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brake extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'model',
    'description',
    'handle_length_inches',
    'vibration',
    'brand_id',
    'tension_id'
  ];

  protected $dates = ['deleted_at'];

  // Relationships
  public function compatibility() {
    return $this->belongsToMany('App\Compatibility')->withTimestamps();
  }

  public function connection() {
    return $this->belongsToMany('App\Connection')->withTimestamps();
  }

  public function brand() {
    return $this->belongsTo('App\Brand')->withTimestamps();
  }

  public function hard_mount() {
    return $this->belongsTo('App\HardMount')->withTimestamps();
  }
}
