<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Editar Inscripcion</title>
</head>
<body>
    @include('navbar')
  <div class="container-fluid bg-dark text-light py-5">
    <div class="container">
      <h1 class="display-5 fw-bold">Editar Inscripción</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
          <div class="card-header">
              <span class="text-primary">Datos de la inscripción</span>
          </div>
          <div class="card-body">
              <form method="POST" class="form-horizontal" action="{{ route( 'inscripciones.update', ['inscripcion' => $inscripcion ->id]) }}">
                @method('put')  
                @csrf
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="id">Código Inscripciom:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese código de la comuna"
                          disabled value="{{ $inscripcion -> id }}">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="estudiante">Estudiante:</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="estudiante_id" name="estudiante_id" required>
                            <option selected disabled value="">Seleccione uno...</option>
                              @foreach ($estudiantes as $estudiante)
                    @if ($estudiante -> id == $inscripcion -> estudiante_id)
                        <option selected value="{{ $estudiante -> id }}">{{ $estudiante -> nombre }}</option>
                    @else
                        <option value="{{ $estudiante -> id }}">{{ $estudiante -> nombre }}</option>
                    @endif
                @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="estudiante">Curso:</label>
                    <div class="col-sm-10">
                      <select class="form-select" id="curso_id" name="curso_id" required>
                          <option selected disabled value="">Seleccione uno...</option>
                            @foreach ($cursos as $curso)
                  @if ($curso -> id == $inscripcion -> curso_id)
                      <option selected value="{{ $curso -> id }}">{{ $curso -> nombre }}</option>
                  @else
                      <option value="{{ $curso -> id }}">{{ $curso -> nombre }}</option>
                  @endif
              @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="fecha">Fecha de inscripción:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="fecha_inscripcion" name="fecha_inscripcion" placeholder="Ingrese la fecha de nacimiento "
                        value="{{ $inscripcion -> fecha_inscripcion }}">
                    </div>
                    </div>
                  <div class="form-group mt-2">
                      <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                          <a class="btn btn-secondary" href="{{ route('inscripciones.index') }}" role="button">Cancelar</a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  @include('footer')
</body>
</html>
