<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;
use App\Http\Requests\StoreCanchaRequest;
use Illuminate\Support\Facades\Auth;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cancha = Cancha::where('id_Usuario', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate();
      return view('cancha.index', ['list' => $cancha]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cancha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCanchaRequest $request)
    {
      //$input = array_merge($request->all(), ["user_id" => Auth::id()])
      //Moment::create($input);

      $cancha = new Cancha($request->all());
      $cancha->id_Usuario = Auth::user()->id;
      $cancha->save();

      return back()->with('success_message', 'Cancha agregada con exito');
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
      return view('cancha.show')->withData($cancha);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cancha = Cancha::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      return view('cancha.edit', ['data' => $cancha]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCanchaRequest $request, $id)
    {
      $cancha = Cancha::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      $input = $request->all();
      $cancha->update($input) ;

      return back()->with('success_message', 'Cancha Actualizada con Exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cancha = Cancha::where('id_Usuario', Auth::user()->id)->findOrFail($id);
      $cancha->delete();
      return back()->with('Cancha Eliminda Con Exito!');
    }
  }
