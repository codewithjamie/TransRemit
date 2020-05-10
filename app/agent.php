<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class agent extends Model
{
    protected $fillable = [
      'name', 'username', 'email', 'phone', 'branch', 'address', 'image', 'status', 'password', 'userid', 'userip', 
    ];

}
