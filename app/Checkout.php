<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public $fillable = ['firstname', 'lastname', 'phone', 'email'];
}
