<?php

namespace App;

use Database\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected static function newFactory()
    {
        return TagFactory::new();
    }

    public function destinations()
    {
        return $this->belongsToMany(Destinations::class);
    }
}
