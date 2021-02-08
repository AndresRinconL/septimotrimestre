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
<div class="content-wrapper">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('Programaformacion.update',$programa->idPrograma) }}" method="post">

                    @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar Ficha</h3>

                    <div class="form-group mt-5">
                        <label for="fkInstructor">JORNADA</label>
                        <select name="fkInstructor" id="fkInstructor" class="form-control" required>
                            <option value="">Seleccionar...</option>
                            @foreach($jornadas as $jornada)
                                <option value="{{ $jornada->idJornada }}">{{ $jornada->nombreJornada}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="codigo">CODIGO:</label>
                        <input name="codigo" id="codigo" type="text" class="form-control" value="{{$programa->codigo}}">
                    </div>

                    <div class="form-group">
                        <label for="nombre">NOMBRE DEL PROGRAMA:</label>
                        <input name="nombre" id="nombre" type="text" class="form-control" value="{{$programa->nombre}}">
                    </div>

                    <div class="form-group">
                        <label for="siglas">SIGLA:</label>
                        <input name="siglas" id="siglas" type="text" class="form-control" value="{{$programa->siglas}}">
                    </div>


                    <input class="btn btn-success my-3" type="submit" value="Actualizar Programa de Formacion">

                </form>

            </div>
        </div>
    </div>

</div>
</body>
</html>

