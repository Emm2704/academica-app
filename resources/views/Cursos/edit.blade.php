<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap Linki -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Nueva Curso</title>
</head>
<body>
   
  <div class="container-fluid bg-dark text-light py-5">
    <div class="container">
      <h1 class="display-5 fw-bold">Cursos</h1>
    </div>
  </div>
    <div class="container">
      <div class="card">
          <div class="card-header">
              <span class="text-primary">Datos del curso</span>
          </div>
          <div class="card-body">
              <form method="POST" class="form-horizontal">
                  
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="id">Código curso:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese código del curso"
                         >
                          <small id="idlHelp" class="form-text text-muted">ID del curso</small>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-sm-2" for="name">Nombre del Curso:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre del curso"
                          >
                      </div>
                      <label class="control-label col-sm-2" for="name">Descripcion del Curso:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese la descripcion del curso"
                          >
                      </div>
                      </div>
                      <label class="control-label col-sm-2" for="name">Duracion del Curso:</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese la duracion del curso"
                          >
                      </div>
                  </div>
                 
                  </div>
              </form>
          </div>
      </div>
  </div>
  
</body>
</html>