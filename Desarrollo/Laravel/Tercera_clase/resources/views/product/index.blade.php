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

@if (Session::has('edit'))
    <div class="alert alert-dark col-md-10 mx-auto mt-3">
        {{ Session::get('edit') }}
    </div>
@endif


<div class="container">
    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('product.create') }}" class="btn btn-primary mt-5 mb-3">Crear un nuevo producto</a>

            <div class="table-responsive">
                <table class="table table-striped table-sm ">
                    <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>FECHA CREACIÓN</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <form action="{{ route('product.destroy',$product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('product.show',$product->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{ route('product.edit',$product->id) }}" class="btn btn-sm btn-warning mt-1 mb-1">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger mt-1 mb-1">Eliminar</button>
                                </form>
                            </td>
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
