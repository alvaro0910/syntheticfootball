<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Precio;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePrecioRequest;

class PrecioController extends Controller
{
  public function index()
  {
      return Precio::all();
  }

  public function show(Precio $precio)
  {
      return $precio;
  }

  public function store(StorePrecioRequest $request)
  {
      $precio = new Precio($request->all());
      $precio->save();
      return response()->json($precio, 201);
  }

  public function update(StorePrecioRequest $request, Precio $precio)
  {
      $precio->update($request->all());
      return response()->json($precio, 200);
  }

  public function delete(Precio $precio)
  {
      $precio->delete();
      return response()->json(null, 204);
  }
}

?>