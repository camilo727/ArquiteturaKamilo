<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    //
    protected $table= 'inventario';

    protected $fillable=[
        'cantidad', 'percio_compra','precio_venta','producto_id'
    ];

    public function producto()
    {
        return $this->belongsTo('App\producto');
    }
}
