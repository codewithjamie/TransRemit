<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class system_book_rider extends Model
{
  protected $table = "system_book_riders";

  protected $fillable = [
      'name', 'phone', 'email', 'gender', 'nationality', 'state', 'city', 'id_type', 'id_number', 'keke_number', 'branch', 'union', 'rider_uid', 'address', 'image', 'qr_code',
  ];
}
