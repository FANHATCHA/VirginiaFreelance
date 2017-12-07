<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddDestination extends Model
{
  protected $fillable = [
   'slug',
   'destinationName',
   'destImgIcon',
   'localAgentName',
   'localAgentImg',
   'description'
 ];
  // Table Name
  protected $table = 'add_destinations';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;

}
