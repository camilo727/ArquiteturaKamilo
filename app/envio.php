<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class envio extends Model
{
    //
    protected $table='envio';
    protected $fillable=[
        'pais', 'ciudad', 'codigo_postal', 'direcion', 'venta_id'
    ];

    public function venta()
    {
        return $this->belongsTo('App\venta');
    }
}
