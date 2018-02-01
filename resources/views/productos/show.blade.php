@extends('layouts.app')
 
@section('content')
    <?php $categorias = $datos['categorias'];
    $categoria = $datos['categoria'];
    $producto = $datos['producto']?>
    @component('componentes.busca', ['categorias' => $categorias ])

    @endcomponent
    <h5><a href="{{ route('categorias.index') }}">{{ 'Principal >' }}</a>{!! link_to_route('categorias.show', $categoria->name, [$categoria->id]) !!}</h5>
    @component('componentes.descripcion', ['producto' => $producto ])
    
    @endcomponent
@endsection