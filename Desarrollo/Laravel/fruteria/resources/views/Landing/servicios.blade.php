@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="logo">
            <img id="logo" src="https://i.ibb.co/8cSbG3j/descarga.png">
        </div>
        <div class="botones">


            <a href="{{route('landing.acercade')}}"class="btn btn-info">Acerca de</a>
            <a href="{{route('landing.index')}}"class="btn btn-info">Inicio</a>
            <a href="{{route('landing.contacto')}}"class="btn btn-info">Contacto</a>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="servicio">
                <h3>Servicios</h3>
                <p id="servicio">Del pozo fruteria ofrece una amplia gama de servicios tanto a particulares como a empresas.</p>

                    <h4>Servicio a particulares</h4>

                <p id="servicio">Su pedido por correo electrónico desde su oficina, o desde su casa. Acceder al Servicio de pedidos
                    Servicio a empresas
                </p>
                    <h4>Servicio a empresas</h4>

                <p id="servicio"> Venta al mayor de nuestros productos
                    Servicio de reparto para supermercados, bares, cafeterías, restaurantes y demás comerciantes del sector de la gastronomía y restauración.
                    Puede realizar su pedido llamando al teléfono 319 778 3482 indicando los productos que desea en el contestador automático.

                    O pueden también hacerlo enviándonos un correo electrónico a tbatzy_q640h@ludxc.com o accediendo al servicio de pedidos

                    Llámenos y le informaremos con mucho gusto</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="empty">

            </div>
        </div>
    </div>
@endsection
