@extends('app2')

@section('contenido')
<h2>Registro de usuario</h2><hr>
 <div class="row">
	<div class="col">
		<form action="">
			<div class="form-group">
				<label for="">Nombre del usuario:</label>
				<input class="form-control" type="text" placeholder="Teclea el alumno">
			</div>
		</form>
	</div>
 </div>

  <!--Registro-->
  <section class="container-fluid container-md pb-5 row d-flex justify-content-center align-items-center">
		<div class="col-12 col-md-8 col-lg-6 col-xl-5">
			<div class="card shadow-2-strong" style="border-radius: 1rem;">
				<div class="card-body p-5 text-center">
					<h1 class="mb-5">Registrarse</h1>
					<!--Nombre-->
					<div class="form-outline mb-4">
						<input type="text" id="nombre" class="form-control form-control-lg">
						<label class="form-label" for="nombre-2" style="margin-left: 0px;">Nombre</label>
						<div class="form-notch">
							<div class="form-notch-leading" style="width: 9px;"></div>
							<div class="form-notch-middle" style="width: 40px;"></div>
							<div class="form-notch-trailing"></div>
						</div>
					</div>
					<!--Correo-->
					<div class="form-outline mb-4">
						<input type="email" id="email" class="form-control form-control-lg">
						<label class="form-label" for="email-2" style="margin-left: 0px;">Correo electronico</label>
						<div class="form-notch">
							<div class="form-notch-leading" style="width: 9px;"></div>
							<div class="form-notch-middle" style="width: 40px;"></div>
							<div class="form-notch-trailing"></div>
						</div>
					</div>
					<!--Numero-->
					<div class="form-outline mb-4">
						<input type="number" pattern="\d*" id="telefono" class="form-control form-control-lg">
						<label class="form-label" for="telefono-2" style="margin-left: 0px;">Telefono</label>
						<div class="form-notch">
							<div class="form-notch-leading" style="width: 9px;"></div>
							<div class="form-notch-middle" style="width: 40px;"></div>
							<div class="form-notch-trailing"></div>
						</div>
					</div>
					<!--Fecha nac-->
					<div class="form-outline mb-4">
						<input type="date" id="nacimiento" class="form-control form-control-lg">
						<label class="form-label" for="nacimiento-2" style="margin-left: 0px;">Fecha de nacimiento</label>
						<div class="form-notch">
							<div class="form-notch-leading" style="width: 9px;"></div>
							<div class="form-notch-middle" style="width: 40px;"></div>
							<div class="form-notch-trailing"></div>
						</div>
					</div>
					<!--Genero-->
					<div class="form-outline mb-4">
						<select class="form-select form-select-lg">
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
						<input type="password" id="contra" class="form-control form-control-lg">
						<label class="form-label" for="contra-2" style="margin-left: 0px;">Contraseña</label>
						<div class="form-notch">
							<div class="form-notch-leading" style="width: 9px;"></div>
							<div class="form-notch-middle" style="width: 40px;"></div>
							<div class="form-notch-trailing"></div>
						</div>
					</div>
					<!--Confirmar contraseña-->
					<div class="form-outline mb-4">
						<input type="password" id="conf_contra" class="form-control form-control-lg">
						<label class="form-label" for="conf_contra-2" style="margin-left: 0px;">Confirmar contraseña</label>
						<div class="form-notch">
							<div class="form-notch-leading" style="width: 9px;"></div>
							<div class="form-notch-middle" style="width: 40px;"></div>
							<div class="form-notch-trailing"></div>
						</div>
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit" onclick="window.location.href='Registrarse.html'">Guardar</button>
					<hr class="my-4">
					<button class="btn btn-lg btn-block btn-danger"  type="submit" onclick="window.location.href='IniciaSesion.html'"> Iniciar sesion</button>
				</div>
			</div>
    </div>
  </section>
@stop