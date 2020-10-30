@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="logo">
            <img id="logo" src="https://i.ibb.co/8cSbG3j/descarga.png">
        </div>
        <div class="botones">

            <a href="{{route('landing.index')}}"class="btn btn-info">Inicio</a>
            <a href="{{route('landing.acercade')}}"class="btn btn-info">Acerca de</a>
            <a href="{{route('landing.index')}}"class="btn btn-info">Inicio</a>
            <a href="{{route('landing.contacto')}}"class="btn btn-info">Contacto</a>
        </div>
    </div>
@endsection
