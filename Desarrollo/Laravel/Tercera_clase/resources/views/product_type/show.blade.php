<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>NOMBRE</th>
                        <td>{{ $product_type->name }}</td>
                    </tr>
                    <tr>
                        <th>CREACIÓN</th>
                        <td>{{ $product_type->created_at }}</td>
                    </tr>
                    <tr>
                        <th>ACTUALIZACION</th>
                        <td>{{ $product_type->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('company.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
