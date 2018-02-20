@extends('layouts.app')
 
@section('content')
     
    @component('componentes.busca', ['categorias' => $categorias ])

    @endcomponent 
    <div>
        @if($productos->count() !== 0)
            {{ "Resultados: ".$productos->count() }}
        @else
            {{ "Resultados: No hay resultados"}}
        @endif
    </div>
    <main class="container-fluid">
        <div class="col-md-8 col-lg-8"> 
            <div class="row">
                <div class="col-sm-10 col-lg-4">    
                    <div class="flipkart-navbar-search smallsearch col-sm-6 col-md-8 col-xs-10 caja">
                               
                    </div> 
                </div> 
                <div class="col-sm-10 col-lg-3">
                    <h4>Denominaci&oacute;n</h4>
                </div>
                <div class="col-sm-10 col-lg-3">
                    <h4>Precio</h4>
                </div>                
                <div class="col-sm-10 col-lg-2">                   
                        <h4>Oferta</h4>
                </div>
            </div>
                
                @foreach( $productos as $producto )
                    <div class="row lista">
                        <div class="col-sm-10 col-lg-4">    
                            <a href="{{ route('categorias.productos.show', [$producto->categoria_id, $producto->id]) }}"><img class='img1' src="{{ $producto->imagen }}"></a>
                        </div> 
                        <div class="col-sm-10 col-lg-4">
                            <h3>{{ $producto->name }}</h3>
                        </div>
                        <div class="col-sm-10 col-lg-2">
                            <h2>{{ $producto->precio }}€</h2>
                        </div>                
                        <div class="col-sm-10 col-lg-2">
                            @auth
                                <h2>{{ $producto->descuento }}%</h2>
                            @endauth
                            @guest
                                <h5>Registrate, descuentos especiales.</h5>
                            @endguest
                        </div>
                    </div>      
                @endforeach
                <div class="paginacion">
                    {{ $productos->appends(['name' => $name])->links() }}
                </div>
        </div> 
        <div class="col-md-3 col-lg-4">    
            @component('componentes.aside')

            @endcomponent
        </div>   
    </main>
    <div class="pie">
        @component('componentes.pie')

        @endcomponent     
    </div> 
@endsection


