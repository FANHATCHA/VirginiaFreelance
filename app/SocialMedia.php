<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
  protected $fillable = [
   'socialMedia',
   'url',
 ];
  // Table Name
  protected $table = 'social_media';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
