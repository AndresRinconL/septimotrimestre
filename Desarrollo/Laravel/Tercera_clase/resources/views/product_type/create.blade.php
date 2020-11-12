<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 card card-body mx-auto">
            <form action="{{ route('product_type.store') }}" method="post">

                @csrf

                <div class="mt-2 mb-5">
                    <h4>Crear Categoria</h4>
                </div>

                <div class="form-group">
                    <label for="name">Nombre de la Categoria</label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>
                <hr>
                <button class="btn btn-primary">Guardar Categoria</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
