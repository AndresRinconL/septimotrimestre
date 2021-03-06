<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Instructor</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-nd-4 mt-5">
            <form action="{{route('Instructor.update',$instructor->idInstructor)}}" method="post">
                @csrf
                @method('put')
                <table class="table">
                    <tbody>
                    <tr>
                        <th>NOMBRES</th>
                        <td> <input type="text" name="nombres" class="form-control" value="{{$instructor->nombres}}"></td>
                    </tr>
                    <tr>
                        <th>APELLIDOS</th>
                        <td> <input type="text" name="apellidos" class="form-control" value="{{$instructor->apellidos}}"></td>
                    </tr>

                    <tr>
                        <th>ESPECIALIDAD</th>
                        <td> <input type="text" name="telefono" class="form-control" value="{{$instructor->especialidad}}"></td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('Instructor.index')}}" class="btn btn-default">CANCELAR</a>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>



