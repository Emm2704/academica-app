<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inscripciones</title>

</head>
<body>
  @include('navbar')
    <div class="container">
        <h1>Listado de Inscripcion</h1>
        <a href="{{ route('inscripciones.create') }}" class="btn btn-dark" style="margin-bottom: 1%">Nuevo</a>
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Estudiante</th>
                <th scope="col">Curso</th>
                <th scope="col">Fecha de inscripcion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($inscripciones as $inscripcion)
              <tr>
                <th scope="row">{{ $inscripcion->id }}</th>
                <td>{{ $inscripcion->nombre_estudiante }}</td>
                <td>{{ $inscripcion->nombre_curso }}</td>
                <td>{{ $inscripcion->fecha_inscripcion }}</td>
                <td>
                  <a href="{{ route('inscripciones.edit', ['inscripcion'=>$inscripcion->id]) }}"
                    class="btn btn-secondary">Editar</a>
                    <form action="{{ route('inscripciones.destroy', ['inscripcion' => $inscripcion->id]) }}"
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