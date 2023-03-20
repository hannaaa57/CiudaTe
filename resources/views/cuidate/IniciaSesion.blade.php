@extends('background1')

@section('titulo')
<<<<<<< HEAD
<title>Iniciar sesion</title>
=======
<title>TTitulo</title>
>>>>>>> cf4c44b (migraciones y modelos)
@stop

@section('contenido')
<section class="container-fluid">
    <div class="container-md pb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <h1 class="mb-5">Iniciar sesion</h1>
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
<<<<<<< HEAD
							<input type="password" id="contra" class="form-control form-control-lg" name="contra" required="required" autofocus="autofocus" autocomplete="current-password">
=======
							<input type="password" id="contra" class="form-control form-control-lg" name="contra" required="required" autofocus="autofocus" autocomplete="contra">
>>>>>>> cf4c44b (migraciones y modelos)
							<label class="form-label" for="contra-2" style="margin-left: 0px;">Contraseña</label>
							<div class="form-notch">
								<div class="form-notch-leading" style="width: 9px;"></div>
								<div class="form-notch-middle" style="width: 40px;"></div>
								<div class="form-notch-trailing"></div>
							</div>
						</div>


                        <label for="remember_me" class="form-check d-flex justify-content-start mb-4">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <span class="form-check-label px-1">Recordar contraseña</span>
                        </label>

                        <button type="submit" class="btn btn-lg btn-block btn-danger">Inicia sesion</button>
						<hr class="my-4">
						    No tienes una cuenta?
<<<<<<< HEAD
						<a class="btn btn-primary btn-lg btn-block"  href="http://localhost/CuidaTe/public/registro">Registrarse</a>
=======
						<a class="btn btn-primary btn-lg btn-block"  href="http://localhost/CuidaTe/public/iniciaSesion">Registrarse</a>
>>>>>>> cf4c44b (migraciones y modelos)
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop   