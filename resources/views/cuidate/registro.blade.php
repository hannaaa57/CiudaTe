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
<<<<<<< HEAD
							<input type="text" id="nombre" class="form-control form-control-lg" name="nombre" required="required" autofocus="autofocus" autocomplete="name">
=======
							<input type="text" id="nombre" class="form-control form-control-lg" name="nombre" required="required" autofocus="autofocus" autocomplete="nombre">
>>>>>>> cf4c44b (migraciones y modelos)
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
						<!--Numero-->
						<div class="form-outline mb-4">
<<<<<<< HEAD
							<input type="number" pattern="\d*" id="telefono" class="form-control form-control-lg" name="telefono" required="required" autofocus="autofocus" autocomplete="tel-local">
=======
							<input type="number" pattern="\d*" id="telefono" class="form-control form-control-lg" name="telefono" required="required" autofocus="autofocus" autocomplete="telefono">
>>>>>>> cf4c44b (migraciones y modelos)
							<label class="form-label" for="telefono-2" style="margin-left: 0px;">Telefono</label>
							<div class="form-notch">
								<div class="form-notch-leading" style="width: 9px;"></div>
								<div class="form-notch-middle" style="width: 40px;"></div>
								<div class="form-notch-trailing"></div>
							</div>
						</div>
						<!--Fecha nac-->
						<div class="form-outline mb-4">
<<<<<<< HEAD
							<input type="date" id="nacimiento" class="form-control form-control-lg" name="nacimiento" required="required" autofocus="autofocus" >
=======
							<input type="date" id="nacimiento" class="form-control form-control-lg" name="nacimiento" required="required" autofocus="autofocus" autocomplete="nacimiento">
>>>>>>> cf4c44b (migraciones y modelos)
							<label class="form-label" for="nacimiento-2" style="margin-left: 0px;">Fecha de nacimiento</label>
							<div class="form-notch">
								<div class="form-notch-leading" style="width: 9px;"></div>
								<div class="form-notch-middle" style="width: 40px;"></div>
								<div class="form-notch-trailing"></div>
							</div>
						</div>
						<!--Genero-->
						<div class="form-outline mb-4">
<<<<<<< HEAD
							<select class="form-select form-select-lg" name="genero" required="required" autofocus="autofocus" id="genero">
=======
							<select class="form-select form-select-lg" name="genero" required="required" autofocus="autofocus" autocomplete="genero" id="genero">
>>>>>>> cf4c44b (migraciones y modelos)
								<option value="M">Mujer</option>
								<option value="H">Hombre</option>
								<option value="O">Otro</option>
							</select>
							<label class="form-label" for="genero-2" style="margin-left: 0px;">Género</label>
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
						<!--Confirmar contraseña-->
						<div class="form-outline mb-4">
<<<<<<< HEAD
							<input type="password" id="conf_contra" class="form-control form-control-lg" name="conf_contra" required="required" autofocus="autofocus" autocomplete="current-password">
=======
							<input type="password" id="conf_contra" class="form-control form-control-lg" name="conf_contra" required="required" autofocus="autofocus" autocomplete="conf_contra">
>>>>>>> cf4c44b (migraciones y modelos)
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