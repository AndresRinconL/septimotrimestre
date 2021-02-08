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
                    <form action="{{ route('Ficha.update',$ficha->idFicha) }}" method="post">

                        @csrf
                        {{method_field('PATCH')}}

                        <h3 class="mb-5">Editar Ficha</h3>

                        <div class="form-group mt-5">
                            <label for="fkInstructor">INSTRUCTOR</label>
                            <select name="fkInstructor" id="fkInstructor" class="form-control" required>
                                <option value="">Seleccionar...</option>
                                @foreach($instructores as $instructor)
                                    <option value="{{ $instructor->idInstructor }}">{{ $instructor->nombres}}</option>
                                @endforeach
                            </select>
                            <label for="fkPrograma">PROGRAMA DE FORMACION</label>
                            <select name="fkPrograma" id="fkPrograma" class="form-control" required>
                                <option value="">Seleccionar...</option>
                                @foreach($programas as $programa)
                                    <option value="{{ $programa->idPrograma }}">{{ $programa->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="numFicha">NÚMERO DE FICHA:</label>
                            <input name="numFicha" id="numFicha" type="text" class="form-control" value="{{$ficha->numFicha}}">
                        </div>

                        <div class="form-group">
                            <label for="description">DESCRIPCIÓN:</label>
                            <input name="description" id="description" type="text" class="form-control" value="{{$ficha->description}}">
                        </div>

                        <div class="form-group">
                            <label for="estatus">ESTADO:</label>
                            <input name="estatus" id="estatus" type="text" class="form-control" value="{{$ficha->estatus}}">
                        </div>


                        <input class="btn btn-success my-3" type="submit" value="Actualizar Ficha">

                    </form>

                </div>
            </div>
        </div>

    </div>
</body>
</html>

