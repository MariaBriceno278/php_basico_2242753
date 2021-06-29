<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //
    protected $table = "Artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

        //ESTABLECER RELCION 1 ARTISTA A M DISCOS

        public function discos(){
            //hasmany:
            //1. Modelo a realcionar
            //2.FK del artista(papa) en los discos(hijo)
            return $this->hasMany('App\Disco' , 'ArtistId');
        }

        //ESTABLCER RELACION 1 ARTISTA -M CANCION

        public function canciones(){
            return $this->hasManyThrough('App\Cancion',
                                            'App\Disco',
                                            'ArtistId',
                                            'AlbumId',
                                            'ArtistId',
                                            'AlbumId');
        }
}
