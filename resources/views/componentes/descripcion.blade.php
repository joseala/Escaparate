<div class="container">
    <div class="row titulo">
        <h2>{{ $producto->name }}</h2>    
    </div>
    <div class="row cuadro">
        <div class="container">
            <div class="col-lg-7">
                <img class="imgd" src="{{ $producto->imagen }}">
            </div>
            <div class="col-lg-5">     
                <div class="row des">
                    <h5>Descripción: {{ $producto->description }}</h5>
                </div>
                <div class="row des">
                    <h5>Precio: {{ $producto->precio }}€</h5>
                </div>                
                <div class="row des">
                    @auth
                        <h5>Descuento: {{ $producto->descuento }}%</h5>
                    @endauth
                    @guest
                        <h5>Registrate, descuentos especiales.</h5>
                    @endguest
                </div>        
            </div> 
        </div>  
    </div>  
</div>
@component('componentes.pie')

@endcomponent




