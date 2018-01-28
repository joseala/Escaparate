@extends('layouts.app')
 
@section('content')
    @component('busca')

    @endcomponent 
    <main class="container">
        <div class="col-sm-10 col-xs-9">
        @foreach( $categorias as $categoria )
            @foreach( $categoria->productos as $producto )
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ route('categorias.productos.show', [$categoria->slug, $producto->slug]) }}"><img class='img1' src="{{ $producto->imagen }}"></a>{{ $producto->name }}</li>
            </ul>
            @endforeach
        @endforeach
        </div>
        <aside class="col-sm-1 col-xs-2">
            <div id='lat'>
                
            </div>
        </aside>
    </main>
    @component('pie')

    @endcomponent 
@endsection
