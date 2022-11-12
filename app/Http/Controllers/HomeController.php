<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Category;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {   colocando esta funcion en cualquier controlador 
        el usuario debera logearse antes de acceder a cualquier funcion 
        
        $this->middleware('auth');

    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
      
      //foreach al modelo de la base de datos y agregarlos a numero
        //$numero['label'][]= $modelo->propiedad
        //$numero['data'][]= $modelo->propiedad
        //y del lado de la view mostrarlo como var data = JSON.parse
        

        return view('admin.index');
    }
}
