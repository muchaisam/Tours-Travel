<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function destinations()
    {
        return $this->hasMany(Destinations::class);
    }
}
