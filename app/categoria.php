<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $table='categoria';
    protected $fillable=['categoria'];

    public function productos()
    {
        return $this->hasMany('App\producto');
    }
}
