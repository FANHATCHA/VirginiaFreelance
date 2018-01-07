<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotDeals extends Model
{
  protected $fillable = [
   'hotdeals_image',
   'reference',
   'slug',
   'hotDealTitle',
   'hotDealLocation',
   'whatIsItFor',
   'price',
   'details',
   'description',
 ];
  // Table Name
  protected $table = 'hot_deals';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
