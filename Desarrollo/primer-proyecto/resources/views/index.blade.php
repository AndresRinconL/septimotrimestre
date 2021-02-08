<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Bienvenido</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <h1>SENA</h1>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-2">
            <a href="{{route('Instructor.index')}}"class="btn btn-dark btn-lg" cla>Instructor</a>

        </div>
        <div class="col-lg-2">
            <a href="{{route('Estudiante.index')}}"class="btn btn-dark btn-lg">Estudiante</a>

        </div>
        <div class="col-lg-2">
            <a href="{{route('Ficha.index')}}"class="btn btn-dark btn-lg">Ficha</a>

        </div>
        <div class="col-lg-2">
            <a href="{{route('Programaformacion.index')}}"class="btn btn-dark btn-lg">Programa</a>

        </div>
        <!-- <div class="col-md-auto">
             <a href="{route('Jornada.index')}}"class="btn btn-dark">Jornada</a>
             <a title="vehiculo" href="vehiculo"></a>
         </div>-->
    </div>
</div>
</body>
</html>

