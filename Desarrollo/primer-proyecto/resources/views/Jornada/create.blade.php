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
            <form action="{{route('Estudiante.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombre">NOMBRE JORNADA</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">

                </div>
                <div class="form-group">
                    <label for="siglas">SIGLAS</label>
                    <input type="text" name="siglas" id="siglas" class="form-control">

                </div>

                <hr>
                <button class="btn  btn-primary" type="submit">GUARDAR APRENDIZ</button>
                <a href="{{ route('Jornada.index') }}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

