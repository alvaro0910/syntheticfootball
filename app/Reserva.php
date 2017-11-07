<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  protected $fillable = [
      'id_Cancha', 'observacion', 'hora_Inicial', 'hora_Final', 'dia',
  ];

  protected $hidden = [
      'id_Usuario',
  ];

  public function clientes(){
    return $this->belongsTo('App\Cancha');
  }
}
