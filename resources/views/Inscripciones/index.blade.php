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
       
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">ID Estudiante</th>
                <th scope="col">ID Curso</th>
                <th scope="col">Fecha de inscripcion</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($inscripciones as $inscripcion)
              <tr>
                <th scope="row">{{ $inscripcion->id }}</th>
                <td>{{ $inscripcion->estudiante_id }}</td>
                <td>{{ $inscripcion->curso_id }}</td>
                <td>{{ $inscripcion->fecha_inscripcion }}</td>
                {{-- <td>
                  <a href="{{ route('estudiantes.edit', ['estudiante'=>$estudiante->id]) }}"
                    class="btn btn-secondary">Editar</a>
                  <form action="{{ route('estudiantes.destroy', ['estudiante' => $estudiante->id]) }}"
                    method='POST' style="display:inline-block">
                    @method('delete')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Eliminar">
                  </form>
                </td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>

    </div>
    @include('footer')
</body>
</html>