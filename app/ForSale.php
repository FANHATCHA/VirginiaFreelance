<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForSale extends Model
{
  protected $fillable = [
   'forSale_image',
   'reference',
   'slug',
   'status',
   'forSaleTitle',
   'forSaleLocation',
   'whatIsItFor',
   'price',
   'details',
 ];
  // Table Name
  protected $table = 'for_sales';
  // Primary Key
  public $primaryKey = 'id';
  // Timestamps
  public $timestamps = true;
}
