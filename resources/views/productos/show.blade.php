@extends('layouts.app')
 
@section('content')
   
    @component('componentes.busca', ['categorias' => $categorias ])

    @endcomponent
    <h5><a href="{{ route('categorias.index') }}">{{ 'Principal >' }}</a>{!! link_to_route('categorias.show', $categoria->name, [$categoria->id]) !!}</h5>
    @component('componentes.descripcion', ['producto' => $producto ])
    
    @endcomponent
    
@endsection