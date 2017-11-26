<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;
use App\Http\Requests\StoreCanchaRequest;
use Illuminate\Support\Facades\Auth;
use DB;

class CanchaUsuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cancha = DB::table('canchas')->orderBy('created_at', 'DESC')->paginate();
      return view('usu.cancha.index', ['list' => $cancha]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cancha = Cancha::where('id', $id)->findOrFail($id);
      $propietario = DB::select(
        'SELECT users.nombre, users.telefono FROM users
        INNER JOIN canchas
        WHERE canchas.id = '.$id.' AND canchas.id_Usuario = users.id;');
      return view('usu.cancha.show')->with('data', $cancha)->with('propietario', $propietario);
    }
  }
