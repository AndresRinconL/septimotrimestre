<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title></title>
    <title>Detalles</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table">
                <tbody>
                <tr>
                    <th>DOCUMENTO</th>
                    <td>{{$estudiante->documento}}</td>
                </tr>
                <tr>
                    <th>TIPO DE DOCUMENTO</th>
                    <td>{{$estudiante->numerocedula}}</td>
                </tr>
                <tr>
                    <th>NOMBRES</th>
                    <td>{{$estudiante->nombres}}</td>
                </tr>
                <tr>
                    <th>APELLIDOS</th>
                    <td>{{$estudiante->apellidos}}</td>
                </tr>
                <tr>
                    <th>CORREO</th>
                    <td>{{$estudiante->direccion}}</td>
                </tr>
                <tr>
                    <th>FECHA DE NACIMIENTO</th>
                    <td>{{$estudiante->telefono}}</td>
                </tr>
                <tr>
                    <th>GENERO</th>
                    <td>{{$estudiante->ciudad}}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{route('Estudiante.index')}}" class="btn btn-default">VOLVER</a>
            <a href="{{route('Estudiante.edit', $estudiante->idEstudiante)}}" class="btn btn-warning">EDITAR</a>
        </div>
    </div>
</div>
</body>
</html>


</body>
</html>


