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
                    <label for="documento">DOCUMENTO</label>
                    <input type="text" name="documento" id="documento" class="form-control">

                </div>
                <div class="form-group">
                    <label for="tipo_doc">TIPO DE DOCUMENTO</label>
                    <input type="text" name="tipo_doc" id="tipo_doc" class="form-control">

                </div>

                <div class="form-group">
                    <label for="nombres">NOMBRES</label>
                    <input type="text" name="nombres" id="nombres" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellidos">APELLIDOS</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                </div>
                <div class="form-group">
                    <label for="correo">CORREO</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="fechaNacimiento">FECHA DE NACIMIENTO</label>
                    <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
                </div>
                <div class="form-group">
                    <label for="genero">GENERO</label>
                    <input type="text" name="genero" id="genero" class="form-control">
                </div>

                <hr>
                <button class="btn  btn-primary" type="submit">GUARDAR APRENDIZ</button>
                <a href="{{ route('Estudiante.index') }}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

