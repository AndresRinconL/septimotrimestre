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
            <form action="{{route('Estudiante.update',$estudiante->id)}}" method="post">
                @csrf
                @method('put')
                <table class="table">
                    <tbody>
                    <tr>
                        <th>DOCUMENTO</th>
                        <td> <input type="text" name="documento" class="form-control" value="{{$estudiante->documento}}">}</td>
                    </tr>
                    <tr>
                        <th>TIPO DE DOCUMENTO</th>
                        <td> <input type="text" name="tipo_doc" class="form-control" value="{{$estudiante->tipo_doc}}">}</td>
                    </tr>
                    <tr>
                        <th>NOMBRES</th>
                        <td> <input type="text" name="nombres" class="form-control" value="{{$estudiante->nombres}}">}</td>
                    </tr>
                    <tr>
                        <th>APELLIDOS</th>
                        <td> <input type="text" name="apellidos" class="form-control" value="{{$estudiante->apellidos}}">}</td>
                    </tr>
                    <tr>
                        <th>CORREO</th>
                        <td> <input type="text" name="correo" class="form-control" value="{{$estudiante->correo}}">}</td>
                    </tr>
                    <tr>
                        <th>FECHA DE NACIMIENTO</th>
                        <td> <input type="text" name="fechaNacimiento" class="form-control" value="{{$estudiante->fechaNacimiento}}">}</td>
                    </tr>
                    <tr>
                        <th>GENERO</th>
                        <td> <input type="text" name="genero" class="form-control" value="{{$estudiante->genero}}">}</td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('Estiduante.index')}}" class="btn btn-default">CANCELAR</a>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>


