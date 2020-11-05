@extends('Layouts.app')

@section('content')
<h1>soy la vista contacto</h1>
<a href="{{route('Landing.acercade')}}"class="btn btn-info">Acerca de</a> |
<a href="{{route('Landing.index')}}"class="btn btn-info">Inicio</a> |
<a href="{{route('Landing.servicios')}}"class="btn btn-info">Servicios</a>
@endsection
