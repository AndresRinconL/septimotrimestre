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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-sm ">
                    <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>EMPRESA</th>
                        <th>CATEGORIA</th>
                        <th>FECHA CREACIÓN</th>
                        <th>FECHA ACTUALIZACIÓN</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($products as $product)
                        
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->company->name }}</td>
                            <td>{{ $product->product_type->name }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->update_at }}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('company.index') }}" class="btn btn-primary mt-5 mb-3">Volver</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
