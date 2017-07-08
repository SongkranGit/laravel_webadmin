<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

   protected $fillable = [
       'name',
       'description',
       'detail',
       'is_active',
       'image_name',
       'created_by'
   ];

}
