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
            <form action="{{route('vehiculo.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="placa">placa</label>
                    <input type="text" name="placa" id="placa" class="form-control">

                </div>

                <div class="form-group">
                    <label for="color">color</label>
                    <input type="text" name="color" id="color" class="form-control">
                </div>

                <div class="form-group">
                    <label for="marca">marca</label>
                    <input type="text" name="marca" id="marca" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tipovehiculo">tipo vehiculo</label>
                    <input type="text" name="tipovehiculo" id="tipovehiculo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="conductor">conductor</label>
                    <input type="text" name="conductor" id="conductor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="propietario">propietario</label>
                    <input type="text" name="propietario" id="propietario" class="form-control">
                </div>
                <hr>
                <button class="btn  btn-primary" type="submit">GUARDAR VEHICULO</button>
                <a href="{{ route('vehiculo.index') }}">CANCELAR</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

