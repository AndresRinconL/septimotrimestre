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
            <form action="{{route('user.update',$user->id)}}" method="post">
                @csrf
                @method('put')
                <table class="table">
                    <tbody>
                    <tr>
                        <th>tipo usuario</th>
                        <td> <input type="text" name="tipousuario" class="form-control" value="{{$user->tipousuario}}">}</td>
                    </tr>
                    <tr>
                        <th>numero cedula</th>
                        <td> <input type="text" name="numerocedula" class="form-control" value="{{$user->numerocedula}}">}</td>
                    </tr>
                    <tr>
                        <th>nombres</th>
                        <td> <input type="text" name="nombres" class="form-control" value="{{$user->nombres}}">}</td>
                    </tr>
                    <tr>
                        <th>apellidos</th>
                        <td> <input type="text" name="apellidos" class="form-control" value="{{$user->apellidos}}">}</td>
                    </tr>
                    <tr>
                        <th>direccion</th>
                        <td> <input type="text" name="direccion" class="form-control" value="{{$user->direccion}}">}</td>
                    </tr>
                    <tr>
                        <th>telefono</th>
                        <td> <input type="text" name="telefono" class="form-control" value="{{$user->telefono}}">}</td>
                    </tr>
                    <tr>
                        <th>ciudad</th>
                        <td> <input type="text" name="ciudad" class="form-control" value="{{$user->ciudad}}">}</td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('user.index')}}" class="btn btn-default">CANCELAR</a>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>


