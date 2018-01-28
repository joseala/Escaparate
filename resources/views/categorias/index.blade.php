@extends('layouts.app')
 
@section('content')
    @component('busca')

    @endcomponent 
   
        @foreach( $categorias as $categoria )
            @foreach( $categoria->productos as $producto )
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ route('categorias.productos.show', [$categoria->slug, $producto->slug]) }}"><img src="{{ $categoria->imagen }}"></a>{{ $producto->name }}</li>
            </ul>
            @endforeach
        @endforeach
  

@endsection
