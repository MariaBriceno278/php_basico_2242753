<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $table = "customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false;


    //REALACION 1:M CON COM COMPRA

    public function compras(){
        return $this->hasMany('App\Compra',
                                'CustomerId');
    }
}
