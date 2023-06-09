<!--Informacion sobre el proyecto y la opcion de registrase iniciar sesion-->

<html>
<head>
  
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/all.css">
  @yield('titulo')
  
</head>
<body>
  
  <!--Barra de navegación-->
  <header class="navbar navbar-default navbar-fixed-top navbar-light" style="background-color: gainsboro;">
    <nav class=" container-fluid bd-gutter flex-wrap flex-lg-nowrap "  aria-label="Main navigation">  
      
      <!--Logo, direcciona al inicio-->
      <a class="navbar-brand" href="http://localhost/CuidaTe/public/inicio">
        <img src="images/CuidaTeLogo.png" alt="CuidaTe"  width="" height="50">
      </a>
      
      @if (Auth::guest())
        <!--Registrate-->
        <div class="d-flex dropdown " aria-expanded="false">
          <a class="btn btn-primary btn-lg btn-block"  href="http://localhost/CuidaTe/public/registro" >Registrarse</a>
        </div>             
      @else
        <div class="d-flex dropdown " data-bs-toggle="dropdown" aria-expanded="false">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/persona.jpg" alt="mdo" width="40" height="40" class="rounded-circle">
          </a>
          <ul class="dropdown-menu dropdown-menu-end text-small shadow">
            <li> <p class="dropdown-header">usuario</p> </li>
            <li><a class="dropdown-item" href="http://localhost/CuidaTe/public/perfil">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="http://localhost/CuidaTe/public/logout" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Cerrar sesión
              </a>
            </li>
          </ul>
        </div> 
      @endif
    </nav>
  </header>

  @yield('contenido')

  <!--Footer-->
  <section class="align-self-end bd-footer">
    <footer class="bg-dark text-white text-center">
      <div class="conteiner p-4">
        <section class="">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-facebook"></i>
          </a>
          <!-- Twitter -->
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fab fa-twitter"></i>
          </a>
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/pulseracuidate/" role="button">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </section>
      </div>
      <section class="me-2 ms-2">
        <p>
          Contactanos en cuidatepulsera@gmail.com
        </p>
      </section>

      <section class="me-2 ms-2">
        <p>
          Te cuidamos con CuidaTe ;)
        </p>
      </section>
      
      <div class="text-center pb-4 px-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="Inicio.html">CuidaTe.com</a>
      </div>
    
    </footer>
  </section>
  
</body>
</html>