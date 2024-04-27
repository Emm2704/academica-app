<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido al Proyecto</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <style>
    /* Estilos personalizados aquí */
    body {
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 100px;
      text-align: center;
    }
    h1 {
      color: #343a40;
    }
    p {
      color: #6c757d;
    }
  </style>
</head>
<body>
    @include('navbar')
  <div class="container">
    <h1>Bienvenido al Proyecto</h1>
    <p>¡Gracias por unirte a nuestro proyecto! Aquí puedes comenzar a explorar y trabajar en nuevas funcionalidades.</p>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-primary"><i class="bi bi-arrow-right-circle"></i> Empezar</a>
  </div>
  
  <!-- Bootstrap Bundle JS (Popper y Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-vt3cUlxlBnW8IrFd7R6JtwAqpjM4vQ7hOQkyHNx8mSTwc9k8UujqcwcpDQ+ndVfC" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-RpyFcybNTvwLwFGsr5+6nqdPAkKvzH+P8Qg5f7NcJ5T7gCtXcOM20otR3b4Qg09x" crossorigin="anonymous"></script>
  
</body>
</html>
