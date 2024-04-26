<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Estudiantes</title>

</head>
<body>
  @include('navbar')
    <div class="container">
        <h1>Listado de Estudiantes</h1>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-dark">Nuevo</a>
        <table class="table table-dark table-striped" style="margin-top: 1%">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($estudiantes as $estudiante)
              <tr>
                <th scope="row">{{ $estudiante->id }}</th>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->apellido }}</td>
                <td>{{ $estudiante->fechanacimiento }}</td>
                <td>{{ $estudiante->email }}</td>
                <td>
                  <form action="{{ route('estudiantes.destroy', ['estudiante' => $estudiante->id]) }}"
                    method='POST' style="display:inline-block">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Eliminar">
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>
    @include('footer')
</body>
</html>