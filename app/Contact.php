<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = [
   'email',
   'phone',
   'fullName',
   'status',
   'msg',
 ];
  // Table Name
  protected $table = 'contacts';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
