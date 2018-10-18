<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wheel extends Model
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
    'diameter',
    'rotation',
    'torque',
    'brushless_motor',
    'resolution',
    'brand_id',
    'drive_id'
  ];

  protected $dates = ['deleted_at'];

  // Relationships

  public function compatibility() {
    return $this->belongsToMany('App\Compatibility');
  }

  public function brand() {
    return $this->belongsTo('App\Brand');
  }

  public function drive() {
    return $this->belongsTo('App\Drive');
  }
}
