<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nuevo Curso</title>
</head>
<body>
  
  <div class="p-5 mb-4 text-bg-dark container-fluid">
    <div class="container">
      <h1 class="display-5 fw-bold">Agregar Curso</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
          <div class="card-header">
              <span class="text-primary">Datos del Curso</span>
          </div>
          <div class="card-body">
            <form method="POST" class="form-horizontal" action="{{ route('cursos.store') }}">
                @csrf
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="nombre">Nombre Curso:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del Curso">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="descripcion">Descripción Curso:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripcion del Curso">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="duracion">Duración Curso:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="duracion" name="duracion" placeholder="6 Semanas">
                    </div>
                </div>
                  <div class="form-group mt-3">
                      <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                          
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>

</body>
</html>