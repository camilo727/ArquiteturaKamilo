<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    //
    protected $table='estado';
    protected $fallable=[
        'estado'
    ];
    public function ventas_has_productos()
    {
        return $this->hasMany('App\ventas_has_producto');
    }
}
