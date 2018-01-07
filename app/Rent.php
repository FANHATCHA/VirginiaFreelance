<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
  protected $fillable = [
   'rent_image',
   'reference',
   'slug',
   'status',
   'rentTitle',
   'rentLocation',
   'whatIsItFor',
   'price',
   'details',
   'description',
 ];
  // Table Name
  protected $table = 'rents';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
