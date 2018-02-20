@extends('layouts.app')
 
@section('content')
   
    @component('componentes.busca', ['categorias' => $categorias ])

    @endcomponent  
    <main class="container-fluid">
        <div class="col-md-8 col-lg-8"> 
            <div class="row">
                <div class="col-sm-2 col-lg-4"> 
                    {!! Form::open(['url' => 'ordena', 'method' => 'GET']) !!}
                        {!! Form::select('ordena', config('options.types'),null,['class' => 'form']) !!}                      
                        {!! Form::submit('ver',null,['placeholder' => 'Ver']); !!}
                    {!! Form::close() !!}     
                </div>
                <div class="col-sm-4 col-lg-4">
                    <h4>Denominaci&oacute;n</h4>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <h4>Precio</h4>
                </div>                
                <div class="col-sm-4 col-lg-2">                   
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
                <div class="col-sm-10 col-lg-2 precio">
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
                    {{ $productos->appends(['ordena' => $ordena])->links() }}
                </div>              
        </div>       
        <div class="col-md-4 col-lg-4">    
            @component('componentes.aside')

            @endcomponent
        </div>   
    </main>
    <div class="pie">
        @component('componentes.pie')

        @endcomponent     
    </div>
    
@endsection


