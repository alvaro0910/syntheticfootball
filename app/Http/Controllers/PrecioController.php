<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;
use App\Precio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrecioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $precio = DB::select(
      'SELECT precios.id, precios.precio, precios.created_at, precios.updated_at, canchas.nombre
      FROM precios
      INNER JOIN canchas
      WHERE canchas.id_Usuario = '.Auth::user()->id.'
      AND precios.id_Cancha = canchas.id;');
      return view('precio.index', ['list' =>  $precio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cancha = Cancha::where('id_Usuario', Auth::user()->id)->get();
      return view('precio.create', ['list' => $cancha]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $precio = new Precio($request->all());
      $precio->save();

      $notificacion = array(
            'message' => 'Precio Agregado Con Exito!!',
            'alert-type' => 'success'
        );
      return redirect()->back()->with($notificacion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
