<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Fichas</title>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <a href="{{route('Ficha.create')}}" class="btn btn-primary mt-5">CREAR FICHA</a>
            <a href="{{url('http://127.0.0.1:8000')}}" class="btn btn-primary mt-5">INICIO</a>
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                    <tr>
                        <th>NÚMERO DE FICHA</th>
                        <th>DESCRIPCIÓN</th>
                        <th>ESTADO</th>
                        <th>INSTRUCTOR</th>
                        <th>PROGRAMA</th>
                        <th>OPCIONES</th>



                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ficha as $ficha)
                        <tr>
                            <td>{{ $ficha->numFicha }}</td>
                            <td>{{ $ficha->description }}</td>
                            <td>{{ $ficha->estatus }}</td>
                            <td>{{ $ficha->instructor->nombres }}</td>
                            <td>{{ $ficha->programa->nombre}}</td>
                            <td>
                                <form action="{{route('Ficha.destroy',$ficha->idFicha)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('Ficha.show',$ficha->idFicha)}}" class="btn btn-primary">Detalles</a>
                                    <a href="{{route('Ficha.edit',$ficha->idFicha)}}" class="btn btn-primary">Editar</a>
                                <button type="submit" class="btn btn-primary">DESACTIVAR</button>

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

