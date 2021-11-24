<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas_has_producto extends Model
{
    //
    protected $table= 'ventas_has_producto';
    protected $fillable=[
        'venta_id', 'producto_id', 'estado_id', 'cantidad', 'descuentos', 'total'
    ];
    public function venta()
    {
        return $this->belongsTo('App\venta');
    }
    public function producto()
    {
        return $this->belongsTo('App\producto');
    }
    public function estado()
    {
        return $this->belongsTo('App\estado');
    }
}
