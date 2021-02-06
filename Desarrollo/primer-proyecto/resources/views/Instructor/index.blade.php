<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Usuarios</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('Conductor.create')}}" class="btn btn-primary mt-5">CREAR USUARIO</a>
            <a href="{{route('principal.informe')}}" class="btn btn-primary mt-5">VER INFORME</a>
            <a href="{{route('principal.inicio')}}" class="btn btn-primary mt-5">INICIO</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>TIPO USUARIO</th>
                        <th>NUMERO CEDULA</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>DIRECCION</th>
                        <th>TELEFONO</th>
                        <th>CIUDAD</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($conuctor as $con)
                        <tr>
                            <td>{{ $conuctor->tipousuario}}</td>
                            <td>{{ $conuctor->numerocedula}}</td>
                            <td>{{ $conuctor->nombres}}</td>
                            <td>{{ $conuctor->apellidos}}</td>
                            <td>{{ $conuctor->direccion}}</td>
                            <td>{{ $conuctor->telefono}}</td>
                            <td>{{ $conuctor->ciudad}}</td>
                            <td>{{ $conuctor->created_at }}</td>
                            <td>
                                <form action="{{route('conductor.destroy',$conductor->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('Conductor.show',$conuctor->id)}}" class="btn btn-primary">DETALLES</a>
                                    <a href="{{route('Conductor.edit',$conuctor->id)}}" class="btn btn-primary">EDITAR</a>
                                    <button type="submit" class="btn btn-primary">ELIMINAR</button>
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
