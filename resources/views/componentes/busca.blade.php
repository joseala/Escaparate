<section class="container-fluid buscador">
            <div class="col-sm-4 col-md-2">
                <ul class="nav navbar-nav">             
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        @foreach( $categorias as $categoria )
                            <li>
                                <a href="{{ route('categorias.show', $categoria->id) }}">{{ $categoria->name }}</a>
                            </li>
                        @endforeach  
                      </ul>
                    </li>
                </ul>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-6 col-md-8 col-xs-10 caja">
                {!! Form::open(['url' => 'buscar', 'method' => 'GET']) !!}
                    {!! Form::text('name',null,['class' => 'flipkart-navbar-input col-xs-11', 'placeholder' => 'Buscar producto' ]) !!}
                    <button class="flipkart-navbar-button col-xs-1">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                {!! Form::close() !!}     
             
            </div> 
            <div class="col-sm-2 col-md-2">
                <h3><a href="/mapas">Localízanos</a></h3>
            </div>
</section>

