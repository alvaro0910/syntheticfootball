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
      $cancha = Cancha::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      $cancha->propietario = Auth::user()->name;
      return view('cancha.show')->withData($cancha);
    }
  }
