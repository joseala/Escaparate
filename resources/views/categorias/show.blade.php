@extends('layouts.app')
 
@section('content')
    <h1><a href="{{ route('categorias.index') }}">{{ 'Categorias' }}</a></h1>
    <h2>{{ $categoria->name }}</h2>
 
    @if ( !$categoria->productos->count() )
        No tienes productos.
    @else
        
        <ul>
            
            @foreach( $categoria->productos as $producto )
                <li><a href="{{ route('categorias.productos.show', [$categoria->slug, $producto->slug]) }}">{{ $producto->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection