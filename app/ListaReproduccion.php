<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaReproduccion extends Model
{
    protected $table = "Playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    //RELACION M:m LISTADEREPRODUCCION -> SUS CACIONES

    public function canciones(){
        //belogsToMany(muchos a muchos con pivote);
        //parametros : 1.Modelo a relacionar
        // 2. la tabla pivote
        //3. FK del modelo actual en la tabla pivote
        // 4. FK del modelo a relacionar en el pivote


        return $this->belongsToMany('App\Cancion',
                                'PlaylistTrack',
                                'PlaylistId',
                                'TrackId');
    }
}
