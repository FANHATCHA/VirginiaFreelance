<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalSlider extends Model
{
  protected $fillable = ['destination_slug', 'slider_position','slider_image', 'description'];
  // Table Name
  protected $table = 'internal_sliders';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;

  public function destinations()
{
  return $this->belongsTo(AddDestination::class, 'destination_slug', 'slug');
}
}
