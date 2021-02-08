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
            <form action="{{route('Instructor.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombres">NOMBRES</label>
                    <input type="text" name="nombres" id="nombres" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellidos">APELLIDOS</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                </div>

                <div class="form-group">
                    <label for="especialidad">ESPECIALIDAD</label>
                    <input type="text" name="especialidad" id="especialidad" class="form-control">
                </div>
                <hr>
                <button class="btn  btn-primary" type="submit">GUARDAR USUARIO</button>
                <a href="{{ route('Instructor.index') }}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

