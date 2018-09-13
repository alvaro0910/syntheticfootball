<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Cancha;
use App\Http\Requests\StoreReservaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReservaUsuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reserva = DB::select(
      'SELECT reservas.id, reservas.hora_Inicial, reservas.hora_Final, reservas.id_Usuario, reservas.dia, precios.precio, canchas.nombre AS canchanom, users.nombre
      FROM canchas, users, precios
      INNER JOIN reservas
      WHERE reservas.id_Usuario = '.Auth::user()->id.'
      AND reservas.id_Cancha = canchas.id
      AND users.id = reservas.id_Usuario
      AND precios.id_Cancha = canchas.id;');
      return view('usu.reserva.index', ['list' =>  $reserva]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cancha = Cancha::select('*')->get();
      return view('usu.reserva.create', ['list' => $cancha]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReservaRequest $request)
    {
      $fechaReserva = $request->dia;
      $hi = $request->hora_Inicial;
      $hf = $request->hora_Final;

      $todayh = getdate();
      $d = $todayh['mday'];
      $m = $todayh['mon'];
      $y = $todayh['year'];

      $fechaActual = $y.'-'.$m.'-'.$d;

      //$tiempoReserva = $horaFinal - $horaInicial;
      //dd($hi." ".$hf);
      if ($fechaReserva >= $fechaActual) {
        if ($hi < $hf) {
          $reserva = new Reserva($request->all());
          $reserva->id_Usuario = Auth::user()->id;
          $reserva->save();

          $notificacion = array(
                'message' => 'Reserva Realizada con Exito!',
                'alert-type' => 'success'
            );
          return redirect()->back()->with($notificacion);
        }else {
          $notificacion = array(
                'message' => 'Hora Inicial Debe ser Menor a la Hora Final!',
                'alert-type' => 'warning'
            );
          return redirect()->back()->with($notificacion);
        }

      }else {
        $notificacion = array(
              'message' => 'Fecha Debe Ser Mayor o Igual a la Fecha Actual!',
              'alert-type' => 'warning'
          );
        return redirect()->back()->with($notificacion);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $reserva = DB::select(
      'SELECT r.id, r.dia, r.hora_Inicial, r.hora_Final, r.observacion, r.created_at, r.updated_at,
      c.nombre, c.descripcion, u.nombre AS nomusu, u.apellido, u.telefono, u.email
      FROM reservas r INNER JOIN canchas c
      ON r.id_Cancha = c.id
      INNER JOIN users u
      ON r.id_Usuario = u.id
      AND r.id = '.$id.';');
      return view('usu.reserva.show', ['list' => $reserva]);
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
      return view('usu.reserva.edit', ['data' => $reserva, 'list' => $cancha]);
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

      $notificacion = array(
            'message' => 'Reserva Actualizada Con Exito!',
            'alert-type' => 'info'
        );
      return redirect()->back()->with($notificacion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $reserva = Reserva::where('id', $id)->findOrFail($id);
      $reserva->delete();

      $notificacion = array(
            'message' => 'Reserva Eliminada Con Exito!',
            'alert-type' => 'info'
        );
      return redirect()->back()->with($notificacion);
    }
}
