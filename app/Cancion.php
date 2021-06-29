<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $table = "Track";
    protected $primaryKey = "TrackId";
    public $timestamps = false;
}
