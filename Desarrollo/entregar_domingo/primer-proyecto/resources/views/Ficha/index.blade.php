<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Vehiculos</title>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <a href="{{route('vehiculo.create')}}" class="btn btn-primary mt-5">CREAR VEHICULO</a>
            <a href="{{route('vehiculo.create')}}" class="btn btn-primary mt-5">VER INFORME</a>
            <a href="{{route('principal.inicio')}}" class="btn btn-primary mt-5">INICIO</a>
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th>PLACA</th>
                        <th>COLOR</th>
                        <th>MARCA</th>
                        <th>TIPO DE VEHICULO</th>
                        <th>CONDUCTOR</th>
                        <th>PROPIETARIO</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vehiculos as $vehiculos)
                        <tr>
                            <td>{{ $vehiculos->placa}}</td>
                            <td>{{ $vehiculos->color}}</td>
                            <td>{{ $vehiculos->marca}}</td>
                            <td>{{ $vehiculos->tipovehiculo}}</td>
                            <td>{{ $vehiculos->conductor}}</td>
                            <td>{{ $vehiculos->propietario}}</td>
                            <td>{{ $vehiculos->created_at }}</td>
                            <td>
                                <form action="{{route('vehiculo.destroy',$vehiculos->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('vehiculo.show',$vehiculos->id)}}" class="btn btn-primary">Detalles</a>
                                    <a href="{{route('vehiculo.edit',$vehiculos->id)}}" class="btn btn-primary">Editar</a>
                                    <button type="submit" class="btn btn-primary">Eliminar</button>

                                </form>

                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</body>
</html>

