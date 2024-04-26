<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bostrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cursos</title>

</head>
<body>
  @include('navbar')
    <div class="container">
        <h1>Listado de cursos</h1>
        <a href="{{ route('cursos.create') }}" class="btn btn-dark" style="margin-bottom: 1%">Nuevo</a>
        <table class="table table-dark table-striped" style="margin-bottom: 7%">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Duracion</th>
                <th scope="col">Acciones</th>
                
              </tr>
            </thead>
            @foreach ($cursos as $curso)
            <tr>
              <th scope="row">{{ $curso->id }}</th>
              <td>{{ $curso->nombre }}</td>
              <td>{{ $curso->descripcion }}</td>
              <td>{{ $curso->duracion }}</td>
              <td>
                <a href="{{ route('cursos.edit', ['curso'=>$curso->id]) }}"
                  class="btn btn-secondary">Editar</a>
                <form action="{{ route('cursos.destroy', ['curso' => $curso->id]) }}"
                  method='POST' style="display:inline-block">
                  @method('delete')
                  @csrf
                  <input class="btn btn-danger" type="submit" value="Eliminar">
                </form>
              </td>
            </tr>
            @endforeach
          </table>

    </div>
    @include('footer')
</body>
</html>