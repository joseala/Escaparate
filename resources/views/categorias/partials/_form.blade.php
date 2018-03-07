<div class="container">
    <div class="col-md-2 col-lg-4"></div>
    <div class="col-md-8 col-lg-4">
        <div class="form-group">
            <h2>Crear categoria</h2>
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name',null,['class' => 'input-group']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('imagen', 'Ruta imagen:') !!}
            {!! Form::text('imagen',null,['class' => 'input-group']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
        </div>
    </div>   
    <div class="col-md-2 col-lg-4"></div>
</div>

 
 
