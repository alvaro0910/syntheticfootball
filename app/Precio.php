<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
  protected $fillable = [
    'id_Cancha','precio',
  ];

  public function preciocancha(){
    return $this->belongsTo('App\Cancha');
  }
}
