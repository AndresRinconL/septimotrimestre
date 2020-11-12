<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Editar Empresa</title>
</head>
<body style="background: #0f0c29;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
            <form action="{{ route('product.update',$product->id) }}" method="post">

                @csrf
                {{method_field('PATCH')}}

                <h3 class="mb-5">Editar Producto</h3>
                <div class="form-group">
                    <label for="name">Nombre del producto</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{$product->name}}">
                </div>
                <div class="form-group">
                    <label for="NIT">Descripción</label>
                    <input type="text" id="description" class="form-control" name="description" value="{{$product->description}}">
                </div>
                <div class="form-group">
                    <label for="address">Precio</label>
                    <input type="text" id="price" class="form-control" name="price" value="{{$product->price}}">
                </div>
                <div class="form-group mt-5">
                    <label for="company_id">Compañia</label>
                    <select name="company_id" id="company_id" class="form-control" required>
                        <option value="">Seleccionar...</option>
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="product_type_id">Tipo de producto</label>
                    <select name="product_type_id" id="product_type_id" class="form-control">
                        <option value="">Seleccionar...</option>
                        @foreach($product_types as $product_type)
                            <option value="{{ $product_type->id }}">{{ $product_type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <input class="btn btn-success my-3" type="submit" value="Actualizar Producto">

            </form>

        </div>
    </div>
</div>


</body>
</html>
