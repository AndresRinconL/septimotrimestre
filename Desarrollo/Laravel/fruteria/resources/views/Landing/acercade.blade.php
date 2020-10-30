@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="logo">
            <img id="logo" src="https://i.ibb.co/8cSbG3j/descarga.png">
        </div>
        <div class="botones">


            <a href="{{route('landing.contacto')}}"class="btn btn-info">Contacto</a>
            <a href="{{route('landing.index')}}"class="btn btn-info">Inicio</a>
            <a href="{{route('landing.servicios')}}"class="btn btn-info">Servicios</a>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="mision">
                <h3>Misión</h3>
                <p id="mision">Nuestra misión es satisfacer las necesidades de todos nuestros clientes y  partner así como también de nuestros  trabajadores,
                    con el objetivo de maximizar la eficiencia y optimizar la rentabilidad a través de nuestra  diferenciación en calidad de producto, servicio y precio.</p>
            </div>
            <div class="vision">
                <h3>Visión</h3>
                <p id="vision">Nuestra visión es conseguir la fidelización de nuestros clientes a través de comercialización de productos de calidad,
                    a partir de la cual afianzar un crecimiento progresivo y sostenido en el mercado nacional y europeo consolidando nuestra posición como empresa de referencia en el sector con una imagen corporativa propia y diferenciada de sus competidores.
                    Del pozo fruteria trabaja para conseguir la máxima calidad, un catálogo de productos diversificado y el mejor servicio al precio más competitivo.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="dueño">
            <h3>Administracion</h3>
            <p id="dueños">Persona a cargo de la parte representativa del poso fruteria</p>
            <p id="dueños">David Andres Rincon Lopez</p>
            <p id="dueños">Número y correo de contacto </p>
            <p id="dueños">3197783482 | tbatzy_q640h@ludxc.com</p>
        </div>
    </div>
@endsection
