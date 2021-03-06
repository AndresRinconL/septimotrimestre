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
            <form action="{{ route('product.store') }}" method="post">

                @csrf
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
                <div class="mt-2 mb-5">
                    <h4>Crear Producto</h4>
                </div>
                <div class="form-group">
                    <label for="name">Nombre del producto</label>
                    <input name="name" id="name" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Descripción del producto</label>
                    <input name="description" id="description" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">precio</label>
                    <input name="price" id="price" type="text" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary mt-3 mb-3">GUARDAR NUEVA PRODUCTO</button>
                <a href="{{ route('company.index') }}" class="btn btn-info mt-3 mb-3">Cancelar</a>
            </form>

        </div>
    </div>
</div>
</body>
</html>
