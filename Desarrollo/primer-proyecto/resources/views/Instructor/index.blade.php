<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Instructor</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('Instructor.create')}}" class="btn btn-primary mt-5">CREAR USUARIO</a>
           <!--<a href="{route('Instructor.trash')}}" class="btn btn-primary mt-5">INSTRUCTORES DESACTIVADOS</a>-->
            <a href="{{url('http://127.0.0.1:8000')}}" class="btn btn-primary mt-5">INICIO</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>ESPECIALIDAD</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($instructor as $instructor)
                        <tr>
                            <td>{{ $instructor->nombres}}</td>
                            <td>{{ $instructor->apellidos}}</td>
                            <td>{{ $instructor->especialidad}}</td>
                            <td>
                                <form action="{{route('Instructor.destroy',$instructor->idInstructor)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('Instructor.show',$instructor->idInstructor)}}" class="btn btn-primary">DETALLES</a>
                                    <a href="{{route('Instructor.edit',$instructor->idInstructor)}}" class="btn btn-primary">EDITAR</a>
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
<!--yield('js')
section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    </script>
endsection -->
</body>
</html>
