@extends('layouts.app')
 
@section('content')
    <h2>
        {!! link_to_route('categorias.show', $categoria->name, [$categoria->slug]) !!} -
        {{ $producto->name }}
    </h2>
 
    {{ $producto->description }}
@endsection