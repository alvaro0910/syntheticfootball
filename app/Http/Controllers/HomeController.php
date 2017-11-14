<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
   */
    public function index()
    {
      $tipo = Auth::user()->tipo;
      if ($tipo == "adm") {
        return view('adm.homeadm');
      }else {
        return view('usu.homeusu');
      }
    }
}
