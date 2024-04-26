<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nueva Inscripcion</title>
</head>
<body>
  
  <div class="p-5 mb-4 text-bg-dark container-fluid">
    <div class="container">
      <h1 class="display-5 fw-bold">Agregar Inscripción</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
          <div class="card-header">
              <span class="text-primary">Datos para la inscripcion</span>
          </div>
          <div class="card-body">
            <form method="POST" class="form-horizontal" action="{{ route('inscripciones.store') }}">
                @csrf
                  
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="estudiante_id">Codigo del estudiante:</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="estudiante_id" name="estudiante_id" required>
                            <option selected disabled value="">Seleccione uno...</option>
                            @foreach ($estudiantes as $estudiante)
                                <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                
                      <div class="form-group">
                      <label class="control-label col-sm-2" for="curso_id">Codigo del curso:</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="curso_id" name="curso_id" required>
                            <option selected disabled value="">Seleccione uno...</option>
                            @foreach ($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                      <div class="form-group">
                      <label class="control-label col-sm-2" for="fecha_inscripcion">Fecha de inscripcion:</label>
                      <div class="col-sm-10">
                          <input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion" placeholder="Ingrese la fecha ">
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