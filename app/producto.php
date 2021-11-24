<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    //
    protected $table='producto';

    protected $fillable=[
        'nombre','descripcion','foto','talla', 'categoria_id', 'genero_id'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\categoria');
    }

    public function genero()
    {
        return $this->belongsTo('App\genero');
    }

    public function inventarios()
    {
        return $this->hasMany('App\inventario');
    }
    public function ventas_has_productos()
    {
        return $this->hasMany('App\ventas_has_producto');
    }
}
