<!--Pagina para registrarse-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/all.css">
    @yield('titulo')
</head>
<body style="background-color: gainsboro;">

  <!--Logo-->
  <div class="py-3 container-md">
    <img  class="img-fluid mx-auto d-block" src="images/CuidaTeLogo.png" alt="CuidaTe" width="350"> 
  </div>
  

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
          <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </section>
      </div>
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