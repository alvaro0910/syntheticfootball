<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Cancha;
use App\Http\Requests\StoreReservaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$reserva = Cancha::where('id_Usuario', Auth::user()->id)
      $reserva = Reserva::select('*')->get();
      //$reserva = DB::table('reservas')->get();
      //  ->join('reservas', 'reservas.id_Cancha', '=', 'canchas.id')->orderBy('created_at', 'DESC')->paginate();;
      //$reserva = Reserva::where('id_Cancha')->join('reservas', 'reservas.id_Cancha', '=', 'canchas.id');
      //$reserva = Reserva::where('id_Usuario', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate();
      return view('reserva.index', ['list' => $reserva]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cancha = Cancha::select('*')->get();
      return view('reserva.create', ['list' => $cancha]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservaRequest $request)
    {
      $reserva = new Reserva($request->all());
      $reserva->id_Usuario = Auth::user()->id;
      $reserva->save();

      return back()->with('success_message', 'Reserva Realizada con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $reserva = Reserva::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      return view('reserva.show')->withData($reserva);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cancha = Cancha::select('*')->get();
      $reserva = Reserva::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      return view('reserva.edit', ['data' => $reserva, 'list' => $cancha]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreReservaRequest $request, $id)
    {
      $reserva = Reserva::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      $input = $request->all();
      $reserva->update($input);

      return back()->with('success_message', 'Reserva Actualizada con Exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $reserva = Reserva::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      $reserva->delete();
      return back()->with('Reserva Eliminda Con Exito!');
    }
}
