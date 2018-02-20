<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function buscar(Request $request) {
        $categorias= Categoria::all();
        $name = $request->name;
        $productos = Producto::where('name','LIKE','%' . $request->name . '%')->paginate(2);        
        //$datos = ['categorias' => $categorias, 'productos' => $productos];
        return view('categorias.busquedas',compact('categorias','productos','name'));
    }
    public function ordena(Request $request) {
        $categorias= Categoria::all();
        $ordena = $request->ordena;
        $productos = Producto::orderBy('precio',$ordena)->paginate(6);
        return view('categorias.ordena', compact('categorias','productos','ordena'));
        
    }
}
