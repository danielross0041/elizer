<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
 	protected $primaryKey = 'id';
  	protected $table = 'product';
    protected $guarded = [];  
}
