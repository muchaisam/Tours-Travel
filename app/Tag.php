<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $fillable = ['name'];

     public function destinations()
     {
          return $this->belongsToMany(Destinations::class);
     }
}
