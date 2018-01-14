<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
  protected $fillable = [
   'slideshow'
 ];
  // Table Name
  protected $table = 'slide_shows';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
