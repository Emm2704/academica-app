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
       
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Duracion</th>
                <th scope="col">Acciones</th>
                
              </tr>
            </thead>
            <tbody>
              <td scope="col">1234</td>
              <td scope="col">Música</td>
              <td scope="col">Descripcion</td>
              <td scope="col">5 Hrs</td>
              <td scope="col">
                <a class="btn btn-info">Editar</a>
                <a class="btn btn-danger">Eliminar</a>
              </td>
                  </form>
                </td>
              </tr>
             
            </tbody>
          </table>

    </div>
    @include('footer')
</body>
</html>