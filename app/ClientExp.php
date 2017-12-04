<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientExp extends Model
{
  protected $fillable = [
   'destination_slug',
   'ux_image',
   'headerTitle',
   'subTitle',
   'description',
   'btnOneName',
   'btnTwoName'
 ];
  // Table Name
  protected $table = 'client_exps';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
