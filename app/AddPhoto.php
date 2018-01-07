<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddPhoto extends Model
{
  protected $fillable = [
   'image',
   'photo_slug',
 ];
  // Table Name
  protected $table = 'add_photos';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
