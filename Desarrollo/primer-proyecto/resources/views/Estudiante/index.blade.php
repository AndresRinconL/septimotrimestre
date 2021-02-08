<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Estudiantes</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('Estudiante.create')}}" class="btn btn-primary mt-5">CREAR ESTUDIANTE</a>
            <a href="{{url('http://127.0.0.1:8000')}}" class="btn btn-primary mt-5">INICIO</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>DOCUMENTO</th>
                        <th>TIPO DE DOCUMENTO</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>GENERO</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estudiante as $estudiante)
                        <tr>

                            <td>{{ $estudiante->documento}}</td>
                            <td>{{ $estudiante->tipo_doc}}</td>
                            <td>{{ $estudiante->nombres}}</td>
                            <td>{{ $estudiante->apellidos}}</td>
                            <td>{{ $estudiante->correo}}</td>
                            <td>{{ $estudiante->fechaNacimiento}}</td>
                            <td>{{ $estudiante->genero}}</td>

                            <td>
                                <form action="{{route('Estudiante.destroy',$estudiante->idEstudiante)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('Estudiante.show',$estudiante->idEstudiante)}}" class="btn btn-primary">DETALLES</a>
                                    <a href="{{route('Estudiante.edit',$estudiante->idEstudiante)}}" class="btn btn-primary">EDITAR</a>
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
