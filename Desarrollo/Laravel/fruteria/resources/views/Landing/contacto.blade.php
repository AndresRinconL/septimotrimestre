@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="logo">
            <img id="logo" src="https://i.ibb.co/8cSbG3j/descarga.png">
        </div>
        <div class="botones">


            <a href="{{route('landing.acercade')}}"class="btn btn-info">Acerca de</a>
            <a href="{{route('landing.index')}}"class="btn btn-info">Inicio</a>
            <a href="{{route('landing.servicios')}}"class="btn btn-info">Servicios</a>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="informacion">
                <h4>Contactenos</h4>
                <p id="informacion"> Teléfono: 319 778 3482</p>
                <p id="informacion"> Correo: tbatzy_q640h@ludxc.com</p>
                <p id="informacion"> Direccion: cl 43 c # 20 2</p>
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3249.020384855865!2d-74.19904594922397!3d4.598521368870171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8e3f9e372dc56ebd%3A0x791ff1dda6249a90!2sCl%2043C%20%2313-2%20a%2013-108%2C%20Soacha%2C%20Cundinamarca!3m2!1d4.5977136!2d-74.1999622!5e0!3m2!1ses-419!2sco!4v1604025316457!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
@endsection
