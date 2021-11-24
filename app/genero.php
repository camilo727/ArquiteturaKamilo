<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    //
    protected $table='genero';

    protected $fillable=['genero'];

    public function productos()
    {
        return $this->hasMany('App\producto');
    }
}
