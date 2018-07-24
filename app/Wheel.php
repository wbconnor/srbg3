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
    return $this->belongsToMany('App\Compatibility')->withTimestamps();
  }

  public function brand() {
    return $this->belongsTo('App\Brand')->withTimestamps();
  }

  public function drive() {
    return $this->belongsTo('App\Drive')->withTimestamps();
  }

  public static function withBrandNames() {
    return static::with('brand')->get()->map(function ($wheel) {
      $wheel->brand_name = $wheel->brand->name;
      return $wheel;
    });
  }
}
