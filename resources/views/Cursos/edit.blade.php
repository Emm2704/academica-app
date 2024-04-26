<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Editar Curso</title>
</head>
<body>
  
  <div class="p-5 mb-4 text-bg-dark container-fluid">
    <div class="container">
      <h1 class="display-5 fw-bold">Editar Curso</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
          <div class="card-header">
              <span class="">Datos del Curso</span>
          </div>
          <div class="card-body">
            <form method="POST" class="form-horizontal" action="{{ route('cursos.update', ['curso' => $curso->id]) }}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nombre">ID:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre "
                        disabled value="{{ $curso -> id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre "
                        value="{{ $curso -> nombre}}">
                    </div>
                </div>
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="descripcion">Descripción:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese el apellido "
                          value="{{ $curso -> descripcion}}">
                      </div>
                      <div class="form-group">
                      <label class="control-label col-sm-2" for="duracion">Duración:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="duracion" name="duracion" placeholder="Ingrese la duracion de nacimiento "
                          value="{{ $curso -> duracion}}">
                      </div>
                      
                  </div>
                  <div class="form-group mt-3">
                      <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-dark">Actualizar</button>
                          <a class="btn btn-secondary" href="{{ route('cursos.index') }}">Volver</a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>

</body>
</html>