<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Categoria;
use App\Producto;
use App\Http\Controllers\Controller;
//use App\Http\Request;
use Redirect;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**public function __construct() {
            $this->middleware('auth');
    }*/
    public function index(Categoria $categoria)
    {
        return view('producto.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Categoria $categoria)
    {
        return view('productos.create', compact('categoria'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Categoria $categoria)
    {
        $input = Input::all();
	$input['categoria_id'] = $categoria->id;
	Producto::create( $input );
 
	$categorias= Categoria::all();
        return view('categorias.show',compact('categoria', 'categorias'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria, Producto $producto)
    {      
        $categorias= Categoria::all();
        return view('productos.show',compact('categoria', 'categorias', 'producto'));
        
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
    public function update(Categoria $categoria,Producto $producto,Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
    
}
