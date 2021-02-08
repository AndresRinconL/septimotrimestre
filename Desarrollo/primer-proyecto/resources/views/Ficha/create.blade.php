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
            <form action="{{route('Ficha.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="numFicha">NÚMERO DE FICHA</label>
                    <input type="text" name="numFicha" id="numFicha" class="form-control">

                </div>
                <div class="form-group">
                    <label for="description">DESCRIPCIÓN</label>
                    <input type="text" name="description" id="description" class="form-control">

                </div>
                <div class="form-group">
                    <label for="estatus">ESTADO</label>
                    <input type="text" name="estatus" id="estatus" class="form-control">

                </div>
                <div class="form-group">
                    <label for="instructor">INSTRUCTOR</label>
                    <select name="instructor" id="instructor" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($instructores as $instructor)
                            <option value="{{ $instructor->idPrograma }}">{{ $instructor->nombres}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="programas">PROGRAMA DE FORMACION</label>
                    <select name="programaF" id="programaF" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($programas as $programa)
                            <option value="{{ $programa->idPrograma }}">{{ $programa->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <hr>
                <button class="btn  btn-primary" type="submit">GUARDAR FICHA</button>
                <a href="{{ route('Ficha.index') }}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

