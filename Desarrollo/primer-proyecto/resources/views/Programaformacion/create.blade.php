<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Conductor</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-nd-4 mt-5">
            <form action="{{route('Programaformacion.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="codigo">CODIGO</label>
                    <input type="text" name="codigo" id="codigo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nombre">NOMBRE DEL PROGRAMA</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="siglas">SIGLA</label>
                    <input type="text" style="text-transform:uppercase;" name="siglas" id="siglas" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jornada">JORNADA</label>
                    <select name="jornada" id="jornada" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($jornadas as $jornada)
                        <option value="{{ $jornada->idJornada }}">{{ $jornada->nombreJornada}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <button class="btn  btn-primary" type="submit">GUARDAR PROGRAMA</button>
                <a href="{{ route('Programaformacion.index') }}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

