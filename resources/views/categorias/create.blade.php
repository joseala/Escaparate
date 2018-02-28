@extends('layouts.app')
 
@section('content') 
    {!! Form::model(new App\Categoria, ['route' => ['categorias.store']]) !!}
        @include('categorias/partials/_form', ['submit_text' => 'Crear Categoria']);
    {!! Form::close() !!}
@endsection
