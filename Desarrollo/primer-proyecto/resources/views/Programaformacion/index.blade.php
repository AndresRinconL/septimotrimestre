<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Programas de formacion</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('Programaformacion.create')}}" class="btn btn-primary mt-5">CREAR PROGRAMA</a>
            <a href="{{url('http://127.0.0.1:8000')}}" class="btn btn-primary mt-5">INICIO</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE DEL PROGRAMA</th>
                        <th>SIGLA</th>
                        <th>JORNADA</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($programa as $programa)
                        <tr>

                            <td>{{ $programa->codigo}}</td>
                            <td>{{ $programa->nombre}}</td>
                            <td>{{ $programa->siglas}}</td>
                            <td>{{ $programa->jornada->nombreJornada}}</td>


                            <td>
                                <!--<form action="{route('Programaformacion.destroy',$programa->idPrograma)}}" method="post">
                                    @csrf
                                    method('DELETE')
                                    <button type="submit" class="btn btn-primary">ELIMINAR</button>-->
                                    <a href="{{route('Programaformacion.show',$programa->idPrograma)}}" class="btn btn-primary">DETALLES</a>
                                    <!--<a href="{{route('Programaformacion.edit',$programa->idPrograma)}}" class="btn btn-primary">EDITAR</a>-->

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
