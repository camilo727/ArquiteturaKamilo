<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class cliente extends Authenticatable
{
    //
    protected $remember_token = false;
    protected $table='cliente';
    protected $fillable=['nombre','apellido','email', 'password', 'rol_id'];

    public function rol()
    {
        return $this->belongsTo('App\rol');
    }
    public function ventas()
    {
        return $this->hasMany('App\venta');
    }
}
