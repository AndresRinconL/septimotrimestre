<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <table class="table">
                <tbody>
                <tr>
                    <th>placa</th>
                    <td>{{$vehiculos->placa}}</td>
                </tr>
                <tr>
                    <th>color</th>
                    <td>{{$vehiculos->color}}</td>
                </tr>
                <tr>
                    <th>marca</th>
                    <td>{{$vehiculos->marca}}</td>
                </tr>
                <tr>
                    <th>tipovehiculo</th>
                    <td>{{$vehiculos->tipovehiculo}}</td>
                </tr>
                <tr>
                    <th>conductor</th>
                    <td>{{$vehiculos->conductor}}</td>
                </tr>
                <tr>
                    <th>propietario</th>
                    <td>{{$vehiculos->propietario}}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{route('vehiculo.index')}}" class="btn btn-default">VOLVER</a>
            <a href="{{route('vehiculo.edit', $vehiculos->id)}}" class="btn btn-warning">EDITAR</a>
        </div>
    </div>
</div>
</body>
</html>


