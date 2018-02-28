@extends('layouts.app')
 
@section('content')
    <h2>Crear producto de categoría "{{ $categoria->name }}"</h2>
 
    {!! Form::model(new App\Producto, ['route' => ['categorias.productos.store', $categoria], 'class'=>'']) !!}
        @include('productos/partials/_form', ['submit_text' => 'Crer producto'])
    {!! Form::close() !!}
@endsection