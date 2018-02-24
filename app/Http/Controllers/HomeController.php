<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Producto;
use Illuminate\Support\Facades\Auth;

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
        $productos = Producto::where('name','LIKE','%' . $request->name . '%')->paginate(5);        
        //$datos = ['categorias' => $categorias, 'productos' => $productos];
        return view('categorias.busquedas',compact('categorias','productos','name'));
    }
    public function ordena(Request $request) {
        
        $categorias= Categoria::all();
        $ordena = $request->ordena;
        if($ordena == "A" || $ordena == "Z"){
            if($ordena == "A"){
                $productos = Producto::orderBy('name','ASC')->paginate(5);
            }else{
                $productos = Producto::orderBy('name','DSC')->paginate(5);
            }
        }else{
            $productos = Producto::orderBy('precio',$ordena)->paginate(5);
        }
        
        
        return view('categorias.ordena', compact('categorias','productos','ordena'));
        
    }
    
    public function editarPerfil(Request $request){
    
        $user = Auth::user();      
        $user->name = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->edad = $request->edad;
        $user->profesion = $request->profesion;
        $user->save();
        return view('perfil')->with('mensaje', 'Perfil guardado!!');;
    }
}
