@extends('layouts.app')

@section('content')
    <?php $location = $region['location']; 
        $lat = $region['lat']; 
        $long = $region['long']; 
        $title = $region['title'];
    ?>
<div class="container">
    <div class="col-lg-8">
     <div id="mapa" data-lat="<?= $lat ?>" data-lng="<?= $long ?>" ></div>   
    </div>
    <div class="col-lg-4">
        <br/>
        <h3>Latitud: {{ $lat }}</h3>
        <br/>
        <h3>Longitud: {{ $long }}</h3>
        <br/>
        <h3>Ciudad: {{ $location }}</h3>
    </div>
    
</div>
    
    
     <div class="pie">
            @component('componentes.pie')

            @endcomponent     
     </div>
    
    
@endsection
    
