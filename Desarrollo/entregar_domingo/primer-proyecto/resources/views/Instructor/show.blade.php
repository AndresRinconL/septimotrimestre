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
                    <th>tipo usuario</th>
                    <td>{{$conductor->tipousuario}}</td>
                </tr>
                <tr>
                    <th>numero cedula</th>
                    <td>{{$conductor->numerocedula}}</td>
                </tr>
                <tr>
                    <th>nombres</th>
                    <td>{{$conductor->nombres}}</td>
                </tr>
                <tr>
                    <th>apellidos</th>
                    <td>{{$conductor->apellidos}}</td>
                </tr>
                <tr>
                    <th>direccion</th>
                    <td>{{$conductor->direccion}}</td>
                </tr>
                <tr>
                    <th>telefono</th>
                    <td>{{$conductor->telefono}}</td>
                </tr>
                <tr>
                    <th>ciudad</th>
                    <td>{{$conductor->ciudad}}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{route('Conductor.index')}}" class="btn btn-default">VOLVER</a>
            <a href="{{route('Conductor.edit', $conductor->id)}}" class="btn btn-warning">EDITAR</a>
        </div>
    </div>
</div>
</body>
</html>


</body>
</html>


