<div class="container descrip">
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
                    
                    @auth
                    <canvas id="tacha" width="55" height="55"></canvas>
                    <table>
                        <tr>
                            <td><h5>Precio:</h5></td>     
                            <td> <h5><div class="tachado">{{ $producto->precio }} </div></h5></td>                         
                            <td> <h5>€</h5></td> 
                        </tr>
                        <tr>
                            <td><h5>Precio oferta:  </h5></td> 
                            <td> <h5><div class="tachado">{{ ($producto->precio)* ((100 - $producto->descuento)* 0.01) }}</div></h5></td> 
                            <td> <h5>€</h5></td>
                        </tr>
                    </table>
                    @endauth
                    @guest
                    <h5 >Precio: {{ $producto->precio }}€</h5>
                    @endguest
                    
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




