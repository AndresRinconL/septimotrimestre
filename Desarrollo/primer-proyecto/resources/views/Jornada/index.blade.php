<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>JORNADA</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('Jornada.create')}}" class="btn btn-primary mt-5">CREAR JORNADA</a>
            <a href="" class="btn btn-primary mt-5">INICIO</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NOMBRE JORNADA</th>
                        <th>SIGLAS</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jornada as $jornada)
                        <tr>

                            <td>{{ $jornada->nombre}}</td>
                            <td>{{ $jornada->siglas}}</td>


                            <td>
                               <form action="{{route('Jornada.destroy',$jornada->idJornada)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">ELIMINAR</button>
                                    <a href="{{route('Jornada.show',$jornada->idJornada)}}" class="btn btn-primary">DETALLES</a>
                                    <a href="{{route('Jornada.edit',$jornada->idJornada)}}" class="btn btn-primary">EDITAR</a>

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
