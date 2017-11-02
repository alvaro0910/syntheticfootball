<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'descripcion',
  ];

  public function propietario(){
    return $this->belongsTo('App\User');
  }

  public function reservas(){
    return $this->hasMany('App\Reserva');
  }
}
