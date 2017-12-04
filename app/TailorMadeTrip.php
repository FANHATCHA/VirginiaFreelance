<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TailorMadeTrip extends Model
{
  protected $fillable = [
   'destination_slug',
   'tailorTrip_image',
   'tailorTripTitle',
   'description',
   'numberofStars',
   'price'
 ];
  // Table Name
  protected $table = 'tailor_made_trips';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
