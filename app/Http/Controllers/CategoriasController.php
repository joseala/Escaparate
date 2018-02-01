<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Categoria;
use App\Producto;
use App\Http\Controllers\Controller;
//use App\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**public function __construct() {
            $this->middleware('auth');
    }*/
    public function index(Request $request)
    {
        $categorias= Categoria::all();
        $productos = DB::table('productos')->paginate(6);
        if(isset($request->name)){
             $productos = Producto::where('name', $request->name)->get();
             
            //$productos = Producto::name($request->get('name'));
            $datos = ['categorias' => $categorias, 'productos' => $productos];
            return view('categorias.busquedas',compact('datos'));
        }else{
            $datos = ['categorias' => $categorias, 'productos' => $productos ];
            return view('categorias.index', compact('datos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $categorias= Categoria::all();
        $categoria = Categoria::find($id);
        $datos = ['categoria' => $categoria, 'categorias' => $categorias];
        return view('categorias.show',compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Categoria $categoria, Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function busca(Request $request)
    {
        $categorias= Categoria::all();
        $productos = Producto::where('name', $request->name)->get();
        $datos = ['categorias' => $categorias, 'productos' => $productos];
        return view('categorias.busquedas',compact('datos'));
    }
    
}
