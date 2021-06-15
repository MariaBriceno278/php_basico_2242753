<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //
    protected $table = "Artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;
}
