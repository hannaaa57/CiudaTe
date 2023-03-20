@extends('background2')

@section('titulo')
<title>Perfil</title>
@stop

@section('contenido')
<<<<<<< HEAD
<!--Contenido-->
<div class="container-fluid bd-gutter bd-layout bg-dark text-white">
  <div class="bd-content bg-light container-lg border-top py-3">
    <!--Titulo-->
    <div class="container-md text-black pb-4">
      <h1 class=" h1 text-black text-center">Perfil</h1>
    </div>
      
    <!--Datos perfil-->
    <div class="bd-content bg-light container-lg border-top ">
      <div class="container-md text-black mt-4">
        <!--Informacion basica-->
        <div class="container-md text-black pb-2">
          <h2>Información basica</h2>
        </div>
        <!--Foto-->
        <div class="justify-content-center text-center mb-3">
          <img src="img/persona.jpg" alt="Foto de perfil" width="200" height="" class="d-block mx-auto rounded-circle">
        </div>
        <!--Nombre-->
        <div class="row ">
          <label for="nombre2" class="col-sm-3 col-form-label">Nombre</label>
          <div class="col-sm-9">
            <input type="text"  value="Yo" class="form-control" id="nombre" name="name" disabled>
          </div>
        </div>
        <!--Correo-->
        <div class="row mb-3 my-3">
          <label for="correo2" class="col-sm-3 col-form-label">Correo electrónico</label>
          <div class="col-sm-9">
            <input type="email" value="micorreo@gmail.com" class="form-control" id="correo" name="correo" disabled>
          </div>
        </div>
        <!--Numero-->
        <div class="row mb-3 my-3">
          <label for="telefono-2" class="col-sm-3 col-form-label">Teléfono</label>
          <div class="col-sm-9">
            <input type="tel" value="6677894513" class="form-control" id="telefono" name="telefono" disabled>
          </div>
        </div>
        <!--Fecha nac-->
        <div class="row mb-3 my-3">
          <label for="fechNac2" class="col-sm-3 col-form-label">Fecha de nacimiento</label>
          <div class="col-sm-9">
            <input type="date" value="2005-05-07" class="form-control" id="fechNac" name="fechaNac" disabled>
          </div>
        </div>
        <!--Genero-->
        <div class="row mb-3 my-3">
          <label for="genero2" class="col-sm-3 col-form-label">Género</label>
          <div class="col-sm-9">
            <input type="text" value="Mujer" class="form-control" id="genero" name="genero" disabled>
          </div>
        </div>
      </div>
    </div>

    <!--Datos especificos-->
    <div class="bd-content bg-light container-lg border-top ">
      <!--Informacion especifica-->
      <div class="container-md text-black pb-2 pt-3">
        <h2>Información específica</h2>
      </div>

      <div class="container-md text-black py-3">
        <!--CURP-->
        <div class="row mb-3 my-3">
          <label for="CURP2" class="col-sm-3 col-form-label">CURP</label>
          <div class="col-sm-9">
            <input type="text"  value="" class="form-control" id="CURP" name="CURP" disabled>
          </div>
        </div>

        <!--Altura-->
        <div class="row mb-3 my-3">
          <label for="altura2" class="col-sm-3 col-form-label">Altura</label>
          <div class="col-sm-9">
            <input type="text"  value="" class="form-control" id="altura" name="altura" disabled >
          </div>
        </div>

        <!--Peso-->
        <div class="row mb-3 my-3">
          <label for="peso2" class="col-sm-3 col-form-label">Peso</label>
          <div class="col-sm-9">
            <input type="text"  value="" class="form-control" id="peso" name="peso" disabled>
          </div>
        </div>
        
        <!--Tipo de sangre-->
        <div class="row mb-3 my-3">
          <label for="tSangre2" class="col-sm-3 col-form-label">Tipo de sangre</label>
          <div class="col-sm-9">
            <input type="email" value="" class="form-control" id="tSangre" name="tSangre" disabled>
          </div>
        </div>

        <!--Ciudad de residencia-->
        <div class="row mb-3 my-3">
          <label for="residencia2" class="col-sm-3 col-form-label">Ciudad de residencia</label>
          <div class="col-sm-9">
            <input type="email" value="" class="form-control" id="residencia" name="residencia" disabled >
          </div>
        </div>

      </div>
    </div>
  
    <!--Datos opcionales-->
    <div class="bd-content bg-light border-top ">
      <!--Información opcional-->
      <div class="container-md text-black pb-2 pt-3">
        <h2>Información opcional</h2>
      </div>
      <div class="container-md text-black py-3">
        
        <!--Enfermedad-->
        <div class="row mb-3 my-3">
          <label for="enfermedad2" class="col-sm-3 col-form-label">Enfermedad</label>
          <div class="col-sm-9">
            <input type="text"  value="" class="form-control" id="enfermedad" name="enfermedad" disabled>
          </div>
        </div>

        <!--Discapacidad-->
        <div class="row mb-3 my-3">
          <label for="discapacidad2" class="col-sm-3 col-form-label">Discapacidad</label>
          <div class="col-sm-9">
            <input type="email" value="" class="form-control" id="discapacidad" name="discapacidad" disabled>
          </div>
        </div>

        <!--Alergias-->
        <div class="row mb-3 my-3">
          <label for="alergias2" class="col-sm-3 col-form-label">Alergias</label>
          <div class="col-sm-9">
            <input type="tel" value="" class="form-control" id="alergias" name="alergias" disabled>
          </div>
        </div>

        <!--Actulmente consume los siguientes medicamentos-->
        <div class="row mb-3 my-3">
          <label for="med2" class="col-sm-3 col-form-label">Actulmente consume medicamentos</label>
          <div class="col-sm-9">
            <input type="tel" value="" class="form-control" id="med" name="med" disabled >
          </div>
        </div>

        <!--Embarazo-->
        <div class="row mb-3 my-3">
          <label for="embarazo2" class="col-sm-3 col-form-label">Embarazo</label>
          <div class="col-sm-9">
            <input type="tel" value="" class="form-control" id="embarazo" name="embarazo" disabled>
          </div>
        </div>

        <!--Consume recurrentemento drogas o alcohol-->
        <div class="row mb-3 my-3">
          <label for="DoA2" class="col-sm-3 col-form-label">Consume recurrentemento drogas o alcohol</label>
          <div class="col-sm-9">
            <input type="tel" value="" class="form-control" id="DoA" name="DoA" disabled>
          </div>
        </div>

        <!--Desea ser donador de organos-->
        <div class="row mb-3 my-3">
          <label for="donar2" class="col-sm-3 col-form-label">Desea ser donador de organos</label>
          <div class="col-sm-9">
            <input type="tel" value="" class="form-control" id="donar" name="donar" disabled>
          </div>
        </div>

      </div>
    </div>

    <!--Persona de confianza-->
    <div class="bd-content bg-light border-top ">
      <div class="container-md text-black py-3">
        <h2>Persona de confianza</h2>
        <!--Nombre-->
        <div class="row mb-3 my-3">
          <label for="nombrePC2" class="col-sm-3 col-form-label">Nombre</label>
          <div class="col-sm-9">
            <input type="text"  value="" class="form-control" id="nombrePC" name="nombrePC" disabled>
          </div>
        </div>
        <!--Numero-->
        <div class="row mb-3 my-3">
          <label for="telefonoPC2" class="col-sm-3 col-form-label">Teléfono</label>
          <div class="col-sm-9">
            <input type="tel" value="" class="form-control" id="telefonoPC" name="telefonoPC" disabled>
          </div>
        </div>
      </div>
    </div>

    <!--Botones-->
    <div class="bd-content bg-light border-top ">
      <div class="container-md text-black py-4">
        <a class="btn btn-primary"  href="http://localhost/CuidaTe/public/editarPerfil">Editar perfil</a>
      </div>
    </div>
  </div>
</div>
=======
 <!--Contenido-->
 <div class="container-fluid bd-gutter bd-layout bg-dark text-white">
    <div class="bd-content bg-light container-lg border-top py-3">
      <!--Titulo-->
      <div class="container-md text-black pb-4">
          <h1 class=" h1 text-black text-center">Perfil</h1>
      </div>
      
      <!--Datos perfil-->
      <div class="bd-content bg-light container-lg border-top ">
        <div class="container-md text-black mt-4">
          <!--Informacion basica-->
          <div class="container-md text-black pb-2">
            <h2>Información basica</h2>
          </div>
          <!--Foto-->
          <div class="justify-content-center text-center mb-3">
            <img src="img/persona.jpg" alt="Foto de perfil" width="200" height="" class="d-block mx-auto rounded-circle">
          </div>
          <!--Nombre-->
          <div class="row ">
            <label for="nombre2" class="col-sm-3 col-form-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text"  value="Yo" class="form-control" id="correo" disabled>
            </div>
          </div>
          <!--Correo-->
          <div class="row mb-3 my-3">
            <label for="correo2" class="col-sm-3 col-form-label">Correo electrónico</label>
            <div class="col-sm-9">
              <input type="email" value="micorreo@gmail.com" class="form-control" id="correo" disabled>
            </div>
          </div>
          <!--Numero-->
          <div class="row mb-3 my-3">
            <label for="telefono-2" class="col-sm-3 col-form-label">Teléfono</label>
            <div class="col-sm-9">
              <input type="tel" value="6677894513" class="form-control" id="telefono" disabled>
            </div>
          </div>
          <!--Fecha nac-->
          <div class="row mb-3 my-3">
            <label for="fechNac2" class="col-sm-3 col-form-label">Fecha de nacimiento</label>
            <div class="col-sm-9">
              <input type="date" value="2005-05-07" class="form-control" id="fechNac" disabled>
            </div>
          </div>
          <!--Genero-->
          <div class="row mb-3 my-3">
            <label for="genero2" class="col-sm-3 col-form-label">Género</label>
            <div class="col-sm-9">
              <input type="text" value="Mujer" class="form-control" id="genero" disabled>
            </div>
          </div>
        </div>
      </div>

      <!--Datos especificos-->
      <div class="bd-content bg-light container-lg border-top ">
        <!--Informacion especifica-->
        <div class="container-md text-black pb-2 pt-3">
          <h2>Información específica</h2>
        </div>

        <div class="container-md text-black py-3">
          <!--CURP-->
          <div class="row mb-3 my-3">
            <label for="CURP2" class="col-sm-3 col-form-label">CURP</label>
            <div class="col-sm-9">
              <input type="text"  value="" class="form-control" id="CURP" disabled>
            </div>
          </div>

          <!--Altura-->
          <div class="row mb-3 my-3">
            <label for="altura2" class="col-sm-3 col-form-label">Altura</label>
            <div class="col-sm-9">
              <input type="text"  value="" class="form-control" id="altura" disabled >
            </div>
          </div>

          <!--Peso-->
          <div class="row mb-3 my-3">
            <label for="peso2" class="col-sm-3 col-form-label">Peso</label>
            <div class="col-sm-9">
              <input type="text"  value="" class="form-control" id="peso" disabled>
            </div>
          </div>
          
          <!--Tipo de sangre-->
          <div class="row mb-3 my-3">
            <label for="tSangre2" class="col-sm-3 col-form-label">Tipo de sangre</label>
            <div class="col-sm-9">
              <input type="email" value="" class="form-control" id="tSangre" disabled>
            </div>
          </div>

          <!--Ciudad de residencia-->
          <div class="row mb-3 my-3">
            <label for="residencia2" class="col-sm-3 col-form-label">Ciudad de residencia</label>
            <div class="col-sm-9">
              <input type="email" value="" class="form-control" id="residencia" disabled >
            </div>
          </div>

        </div>
      </div>
    
      <!--Datos opcionales-->
      <div class="bd-content bg-light border-top ">
        <!--Información opcional-->
        <div class="container-md text-black pb-2 pt-3">
          <h2>Información opcional</h2>
        </div>
        <div class="container-md text-black py-3">
          
          <!--Enfermedad-->
          <div class="row mb-3 my-3">
            <label for="enfermedad2" class="col-sm-3 col-form-label">Enfermedad</label>
            <div class="col-sm-9">
              <input type="text"  value="" class="form-control" id="enfermedad" disabled>
            </div>
          </div>

          <!--Discapacidad-->
          <div class="row mb-3 my-3">
            <label for="discapacidad2" class="col-sm-3 col-form-label">Discapacidad</label>
            <div class="col-sm-9">
              <input type="email" value="" class="form-control" id="discapacidad" disabled>
            </div>
          </div>

          <!--Alergias-->
          <div class="row mb-3 my-3">
            <label for="alergias2" class="col-sm-3 col-form-label">Alergias</label>
            <div class="col-sm-9">
              <input type="tel" value="" class="form-control" id="alergias" disabled>
            </div>
          </div>

          <!--Actulmente consume los siguientes medicamentos-->
          <div class="row mb-3 my-3">
            <label for="med2" class="col-sm-3 col-form-label">Actulmente consume medicamentos</label>
            <div class="col-sm-9">
              <input type="tel" value="" class="form-control" id="med"disabled >
            </div>
          </div>

          <!--Embarazo-->
          <div class="row mb-3 my-3">
            <label for="embarazo2" class="col-sm-3 col-form-label">Embarazo</label>
            <div class="col-sm-9">
              <input type="tel" value="" class="form-control" id="embarazo" disabled>
            </div>
          </div>

          <!--Consume recurrentemento drogas o alcohol-->
          <div class="row mb-3 my-3">
            <label for="DoA2" class="col-sm-3 col-form-label">Consume recurrentemento drogas o alcohol</label>
            <div class="col-sm-9">
              <input type="tel" value="" class="form-control" id="DoA" disabled>
            </div>
          </div>

          <!--Desea ser donador de organos-->
          <div class="row mb-3 my-3">
            <label for="donar2" class="col-sm-3 col-form-label">Desea ser donador de organos</label>
            <div class="col-sm-9">
              <input type="tel" value="" class="form-control" id="donar" disabled>
            </div>
          </div>

        </div>
      </div>

      <!--Persona de confianza-->
      <div class="bd-content bg-light border-top ">
        <div class="container-md text-black py-3">
          <h2>Persona de confianza</h2>
          <!--Nombre-->
          <div class="row mb-3 my-3">
            <label for="nombrePC2" class="col-sm-3 col-form-label">Nombre</label>
            <div class="col-sm-9">
              <input type="text"  value="" class="form-control" id="nombrePC" disabled>
            </div>
          </div>
          <!--Numero-->
          <div class="row mb-3 my-3">
            <label for="telefonoPC2" class="col-sm-3 col-form-label">Teléfono</label>
            <div class="col-sm-9">
              <input type="tel" value="" class="form-control" id="telefonoPC" disabled>
            </div>
          </div>
        </div>
      </div>

      <!--Botones-->
      <div class="bd-content bg-light border-top ">
        <div class="container-md text-black py-4">
          <button type="submit" onclick="window.location.href='EditarDatos.html'" class="btn btn-primary">Editar perfil</button>  
        </div>
      </div>

    </div>
  </div>
>>>>>>> cf4c44b (migraciones y modelos)
@stop