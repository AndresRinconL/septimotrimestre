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
        <div class="col-nd-4 mt-5">
            <form action="{{route('vehiculo.update',$vehiculos->id)}}" method="post">
                @csrf
                @method('put')
                <table class="table">
                    <tbody>
                    <tr>
                        <th>placa</th>
                        <td> <input type="text" name="placa" class="form-control" value="{{$vehiculos->placa}}">}</td>
                    </tr>
                    <tr>
                        <th>color</th>
                        <td> <input type="text" name="color" class="form-control" value="{{$vehiculos->color}}">}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td> <input type="text" name="marca" class="form-control" value="{{$vehiculos->marca}}">}</td>
                    </tr>
                    <tr>
                        <th>tipo vehiculo</th>
                        <td> <input type="text" name="tipovehiculo" class="form-control" value="{{$vehiculos->tipovehiculo}}">}</td>
                    </tr>
                    <tr>
                        <th>Conductor</th>
                        <td> <input type="text" name="conductor" class="form-control" value="{{$vehiculos->conductor}}">}</td>
                    </tr>
                    <tr>
                        <th>propietario</th>
                        <td> <input type="text" name="propietario" class="form-control" value="{{$vehiculos->propietario}}">}</td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('vehiculo.index')}}" class="btn btn-default">CANCELAR</a>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

