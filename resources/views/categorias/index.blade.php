@extends('layouts.app')
 
@section('content')
    @component('componentes.busca', ['categorias' => $categorias ])

    @endcomponent 
    <main class="container-fluid">
        <div class="col-md-1 col-lg-1 ">    
            
        </div>
        <div class="col-md-8 col-lg-8"> 
            <div class="row">
                <div class="col-sm-10 col-lg-4">    

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
            @foreach( $categorias as $categoria )
                @foreach( $categoria->productos as $producto )
                    <div class="row lista">
                        <div class="col-sm-10 col-lg-4">    
                            <a href="{{ route('categorias.productos.show', [$categoria->slug, $producto->slug]) }}"><img class='img1' src="{{ $producto->imagen }}"></a>
                        </div> 
                        <div class="col-sm-10 col-lg-4">
                            <h3>{{ $producto->name }}</h3>
                        </div>
                        <div class="col-sm-10 col-lg-2">
                            <h4>{{ $producto->precio }}€</h4>
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
            @endforeach
        </div> 
        <div class="col-md-3 col-lg-3">    
            @component('componentes.aside')

            @endcomponent
        </div>   
    </main>
    @component('componentes.pie')

    @endcomponent 
@endsection
