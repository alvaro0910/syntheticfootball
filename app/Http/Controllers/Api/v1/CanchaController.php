<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Cancha;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCanchaRequest;

class CanchaController extends Controller
{
  public function index()
  {
      return Cancha::all();
  }

  public function show(Cancha $cancha)
  {
      return $cancha;
  }

  public function store(StoreCanchaRequest $request)
  {
      $cancha = Cancha::create($request->all());
      return response()->json($cancha, 201);
  }

  public function update(StoreCanchaRequest $request, Cancha $cancha)
  {
      $cancha->update($request->all());
      return response()->json($cancha, 200);
  }

  public function delete(Cancha $cancha)
  {
      $cancha->delete();
      return response()->json(null, 204);
  }
}
