<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Reserva;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReservaRequest;

class ReservaController extends Controller
{
  public function index()
  {
      return Reserva::all();
  }

  public function show(Reserva $reserva)
  {
      return $reserva;
  }

  public function store(StoreReservaRequest $request)
  {
      $reserva = new Reserva($request->all());
      $reserva->id_Usuario = 1;
      $reserva->save();
      return response()->json($reserva, 201);
  }

  public function update(StoreReservaRequest $request, Reserva $reserva)
  {
      $reserva->update($request->all());
      return response()->json($reserva, 200);
  }

  public function delete(Reserva $reserva)
  {
      $reserva->delete();
      return response()->json(null, 204);
  }
}
