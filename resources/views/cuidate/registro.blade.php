@extends('background1')

@section('contenido')
  	<!--Registro-->
<section class="container-fluid">
  <div class="container-md pb-5">
    <div class="row d-flex justify-content-center align-items-center">
	    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
			  <div class="card shadow-2-strong" style="border-radius: 1rem;">
				  <div class="card-body p-5 text-center">
					  <h1 class="mb-5">Registrarse</h1>
					  <form action="" method="POST" action="http://localhost/CuidaTe/public/register">
						  <!--Nombre-->
						  <div class="form-outline mb-4">
							  <input type="text" id="name" class="form-control form-control-lg" name="name" required="required" autofocus="autofocus" autocomplete="name">
							  <label class="form-label" for="nombre2" style="margin-left: 0px;">Nombre</label>
							  <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 40px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
						  </div>
              <!--Correo-->
              <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control form-control-lg" name="email" required="required" autofocus="autofocus" autocomplete="email">
                <label class="form-label" for="email-2" style="margin-left: 0px;">Correo electronico</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 40px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>
              <!--Contraseña-->
              <div class="form-outline mb-4">
                <input type="password" id="contra" class="form-control form-control-lg" name="contra" required="required" autofocus="autofocus" autocomplete="current-password">
                <label class="form-label" for="contra-2" style="margin-left: 0px;">Contraseña</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 40px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>
              <!--Confirmar contraseña-->
              <div class="form-outline mb-4">
                <input type="password" id="conf_contra" class="form-control form-control-lg" name="conf_contra" required="required" autofocus="autofocus" autocomplete="current-password">
                <label class="form-label" for="conf_contra-2" style="margin-left: 0px;">Confirmar contraseña</label>
                <div class="form-notch">
                  <div class="form-notch-leading" style="width: 9px;"></div>
                  <div class="form-notch-middle" style="width: 40px;"></div>
                  <div class="form-notch-trailing"></div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>
              <hr class="my-4">
              Ya tienes una cuenta?
              <a class="btn btn-lg btn-block btn-danger"  href="http://localhost/CuidaTe/public/iniciaSesion">Inicia sesion</a>
					  </form>
				  </div>
			  </div>
		  </div>
		</div>
	</div>
</section>
@stop