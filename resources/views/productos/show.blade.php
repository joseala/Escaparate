@extends('layouts.app')
 
@section('content')
    <?php $categorias = $datos['categorias'];
    $categoria = $datos['categoria'];
    $producto = $datos['producto']?>
    @component('componentes.busca', ['categorias' => $categorias ])

    @endcomponent
    <h2>
        {!! link_to_route('categorias.show', $categoria->name, [$categoria->id]) !!} -
        {{$producto->name}}
    </h2>
    @component('componentes.descripcion', ['producto' => $producto ])
    @endcomponent
@endsection