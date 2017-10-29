<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;
use App\Http\Requests\StoreCanchaRequest;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $canchas = Cancha::all();
      return view('cancha.index', ['list' => $canchas]);
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
      $input = $request->all();
      Cancha::create($input);
      return redirect('/homeadm')->withFlashMessage('Cancha agregada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cancha = Cancha::findOrFail($id);
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
      try{
        $cancha = Cancha::findOrFail($id);
        return view('cancha.edit', ['data' => $cancha]);
      }catch(ModelNotFoundException $e){
        return redirect()->back()->withFlashMessage('La cancha ($id) no se encuentra para editar!');
      }
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
      try{
        $cancha = Cancha::findOrFail($id);
        $input = $request->all();
        $cancha->fill($input)->save();
        return redirect('/homeadm')->withFlashMessage('Cancha Actualizada Con Exito!');
      }
      catch(ModelNotFoundException $e){
        return redirect()->back()->withFlashMessage('La Cancha No Pudo Ser Editada!');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try{
        $cancha = Cancha::findOrFail($id);
        $cancha->delete();
        return redirect('/homeadm')->withFlashMessage('Cancha Eliminda Con Exito!');
      }
      catch(ModelNotFoundException $e){
        return redirect()->back()->withFlashMessage("La Cancha ($id) No Pudo Ser Eliminada!");
      }
    }
}
