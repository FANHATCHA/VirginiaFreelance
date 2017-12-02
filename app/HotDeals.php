<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotDeals extends Model
{
  protected $fillable = [
   'username',
   'hotdeals_image',
   'hotDealTitle',
   'description',
   'numberofStars',
   'price'
 ];
  // Table Name
  protected $table = 'hot_deals';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
