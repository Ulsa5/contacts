<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contacts!</title>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contacts!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Información</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Formulario de contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <div>
        <h1>Hola Mundo!</h1>
    </div>

    <div class="container">
    <form class="row g-3">
  <div class="col-auto">
  <label for="inputnombre" class="visually-hidden">Nombre del contacto</label>
    <input type="text" class="form-control" id="inputnombre" placeholder="Nombre completo">
  </div>
  <div class="col-auto">
    <label for="inputtelefono" class="visually-hidden">Telefono del contacto</label>
    <input type="number" class="form-control" id="inputtelefono" placeholder="Telefono">
  </div>
  <div class="col-auto">
    <label for="inputcorreo" class="visually-hidden">Correo del contacto</label>
    <input type="email" class="form-control" id="inputcorreo" placeholder="Correo Electrónico">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Guardar contacto</button>
  </div>
  
  <div class="col-auto">
    <button type="submit" class="btn btn-danger mb-3">Cancelar</button>
  </div>
</form>
    </div>


    <div class="container">
    <table class="table">
  <thead class="table-dark">
      <th>Nombre del contacto</th>
      <th>Número Telefónico</th>
      <th>Correo electrónico</th>
      <th>Categoría</th>
    ...
  </thead>
  <tbody>
    ...
  </tbody>
</table>
    </div>




    
</body>
</html>