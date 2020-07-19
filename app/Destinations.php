<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $fillable =[
        'title', 'description', 'content', 'image', 'published_at'
    ];
}
