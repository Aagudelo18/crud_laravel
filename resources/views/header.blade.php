<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Header</title>
  </head>

  <body class="bg-secondary">

    <!-- Inicio del menu -->
    
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">

        <!-- icono o nombre -->
        <a class="navbar-brand" href="" >
          <img src="https://laparisina.co/wp-content/uploads/2021/10/reposteria-francesa-medellin-300x138.png" alt="" width="120">
        </a>
            
        <!-- boton del menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          <!-- elementos del menu colapsable -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav me-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="clientes">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categorias">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/productos">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pedidos">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ventas">Ventas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Empleados">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tipo_documento">Tipo Documento</a>
            </li>
          </ul>
          
         <!--boton Cerrar -->
          <form class="d-flex">
            <button class="btn btn-outline-warning d-none d-md-inline-block " type="submit">Cerrar Sesión</button>
          </form>
          
          
        </div>
     
        </div>  
      </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>