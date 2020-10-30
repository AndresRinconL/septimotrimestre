@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="logo">
            <img id="logo" src="https://i.ibb.co/8cSbG3j/descarga.png">
        </div>
        <div class="botones">


            <a href="{{route('landing.acercade')}}"class="btn btn-info">Acerca de</a>
            <a href="{{route('landing.contacto')}}"class="btn btn-info">Contacto</a>
            <a href="{{route('landing.servicios')}}"class="btn btn-info">Servicios</a>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="frutas1">
                    <div class="fruta1">
                        <img id="naranja" src="https://image.freepik.com/foto-gratis/fruta-naranja-aislada_33736-2991.jpg">
                        <p>La naranja es una fruta cítrica obtenida del naranjo dulce, del naranjo amargo y de naranjos de otras variedades o híbridos, de origen asiático.</p>
                    </div>
                    <div class="fruta2">
                        <img id="melon" src="https://i.ibb.co/Cv2SYm8/melon.jpg">
                        <p>El melón es una fruta globosa, redonda o alargada, de 20 a 30cm de largo y hasta 2kg de peso. La corteza surcada o reticulada puede ser de color amarillo claro.</p>
                    </div>
                    <div class="fruta3">
                        <img id="sandia" src="https://i.ibb.co/t2GTDbJ/sandia.jpg">
                        <p>La sandía es un fruto grande y de forma más o menos esférica que suele consumirse cruda como postre. Su pulpa es de color rojizo o amarillento y de sabor dulce.</p>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="frutas2">
                <div class="fruta4">
                    <img id="pera" src="https://i.ibb.co/BjymDLR/pera.jpg">
                    <p>La pera es una fruta jugosa, carnosa, de diferente tamaño, sabor y color (del verde al amarillo, al rojo, hasta el color castaña)</p>
                </div>
                <div class="fruta5">
                    <img id="fresas" src="https://i.ibb.co/rkDq9bX/fresa.jpg">
                    <p>Las fresas son muy apreciadas por su agradable aroma y efecto estimulante del apetito. Son fácilmente digestibles y tienen un gran efecto laxante debido a su fibra, pigmentos, ácidos y enzimas</p>

                </div>
                <div class="fruta6">
                    <img id="mango" src="https://i.ibb.co/bNd7ghb/mango.jpg">
                    <p>El mango de la especie Mangifera indica es una fruta jugosa (más específicamente una drupa) y tiene numerosas variedades con formas</p>
                </div>
                <div class="fruta7">
                    <img id="uvas" src="https://i.ibb.co/rH73gvT/uvas.jpg">
                    <p>La uva es un fruta que crece en racimos apretados. Su pulpa es blanca o púrpura y de sabor dulce</p>
                </div>
            </div>
        </div>
    </div>
@endsection
