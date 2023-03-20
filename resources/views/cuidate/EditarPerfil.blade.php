@extends('background2')

@section('titulo')
<title>Editar perfil</title>
@stop

@section('contenido')
 <!--Contenido-->
 <div class="container-fluid bd-gutter bd-layout bg-dark text-white">
    <div class="bd-content bg-light container-lg border-top py-3">
      <!--Titulo-->
      <div class="container-md text-black pb-4">
          <h1 class=" h1 text-black text-center">Editar datos</h1>
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
            <button type="button" class="btn">Cambiar foto de perfil</button>
          </div>
          <!--Nombre-->
          <div class="row ">
            <label for="nombre2" class="col-sm-3 col-form-label">Nombre</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="text" name="nombre" value="Yo" class="form-control" id="nombre" disabled>
=======
              <input type="text"  value="Yo" class="form-control" id="correo" disabled>
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <!--Correo-->
          <div class="row mb-3 my-3">
            <label for="correo2" class="col-sm-3 col-form-label">Correo electrónico</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="email" value="micorreo@gmail.com" class="form-control" id="correo" name="correo" disabled>
=======
              <input type="email" value="micorreo@gmail.com" class="form-control" id="correo" disabled>
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <!--Numero-->
          <div class="row mb-3 my-3">
            <label for="telefono-2" class="col-sm-3 col-form-label">Teléfono</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="tel" value="6677894513" class="form-control" id="telefono" name="telefono" disabled>
=======
              <input type="tel" value="6677894513" class="form-control" id="telefono" disabled>
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <!--Fecha nac-->
          <div class="row mb-3 my-3">
            <label for="fechNac2" class="col-sm-3 col-form-label">Fecha de nacimiento</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="date" value="2005-05-07" class="form-control" id="fechNac" name="fecNac" disabled>
=======
              <input type="date" value="2005-05-07" class="form-control" id="fechNac" disabled>
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <!--Genero-->
          <div class="row mb-3 my-3">
            <label for="genero2" class="col-sm-3 col-form-label">Género</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="text" value="Mujer" class="form-control" id="genero" name="genero" disabled>
=======
              <input type="text" value="Mujer" class="form-control" id="genero" disabled>
>>>>>>> cf4c44b (migraciones y modelos)
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
<<<<<<< HEAD
              <input type="text"  value="" class="form-control" id="CURP" name="CURP" required="required" autofocus="autofocus">
=======
              <input type="text"  value="" class="form-control" id="CURP" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
            </select>
          </div>

          <!--Altura-->
          <div class="row mb-3 my-3">
            <label for="altura2" class="col-sm-3 col-form-label">Altura</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="number" value="" class="form-control" id="altura" name="altura" required="required" autofocus="autofocus">
=======
              <input type="number"  value="" class="form-control" id="altura" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
            </select>
          </div>

          <!--Peso-->
          <div class="row mb-3 my-3">
            <label for="peso2" class="col-sm-3 col-form-label">Peso</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="number"  value="" class="form-control" id="peso" name="peso" required="required" autofocus="autofocus">
=======
              <input type="number"  value="" class="form-control" id="peso" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
            </select>
          </div>
          
          <!--Tipo de sangre-->
          <div class="row mb-3 my-3">
            <label for="tSangre2" class="col-sm-3 col-form-label">Tipo de sangre</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="email" value="" class="form-control" id="tSangre" name="tSangre" required="required" autofocus="autofocus">
=======
              <input type="email" value="" class="form-control" id="tSangre" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
            </select>
          </div>

          <!--Ciudad de residencia-->
          <div class="row mb-3 my-3">
            <label for="residencia2" class="col-sm-3 col-form-label">Ciudad de residencia</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="email" value="" class="form-control" id="residencia" name="residencia" required="required" autofocus="autofocus">
=======
              <input type="email" value="" class="form-control" id="residencia" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
            </select>
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
<<<<<<< HEAD
              <input type="text"  value="" class="form-control" id="enfermedad" name="enfermedad" autofocus="autofocus">
=======
              <input type="text"  value="" class="form-control" id="enfermedad" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
              <option value="3">Nunca</option>
            </select>
          </div>

          <!--Discapacidad-->
          <div class="row mb-3 my-3">
            <label for="discapacidad2" class="col-sm-3 col-form-label">Discapacidad</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="email" value="" class="form-control" id="discapacidad" name="discapacidad" autofocus="autofocus">
=======
              <input type="email" value="" class="form-control" id="discapacidad" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
              <option value="3">Nunca</option>
            </select>
          </div>

          <!--Alergias-->
          <div class="row mb-3 my-3">
            <label for="alergias2" class="col-sm-3 col-form-label">Alergias</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="tel" value="" class="form-control" id="alergias" name="alergias" autofocus="autofocus">
=======
              <input type="tel" value="" class="form-control" id="alergias" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
              <option value="3">Nunca</option>
            </select>
          </div>

          <!--Actulmente consume los siguientes medicamentos-->
          <div class="row mb-3 my-3">
            <label for="med2" class="col-sm-3 col-form-label">Actulmente consume medicamentos</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="tel" value="" class="form-control" id="med" name="med" autofocus="autofocus">
=======
              <input type="tel" value="" class="form-control" id="med" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
              <option value="3">Nunca</option>
            </select>
          </div>

          <!--Embarazo-->
          <div class="row mb-3 my-3">
            <label for="embarazo2" class="col-sm-3 col-form-label">Embarazo</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="tel" value="" class="form-control" id="embarazo" name="embarazo" autofocus="autofocus">
=======
              <input type="tel" value="" class="form-control" id="embarazo" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
              <option value="3">Nunca</option>
            </select>
          </div>

          <!--Consume recurrentemento drogas o alcohol-->
          <div class="row mb-3 my-3">
            <label for="DoA2" class="col-sm-3 col-form-label">Consume recurrentemento drogas o alcohol</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="tel" value="" class="form-control" id="DoA" name="DoA" autofocus="autofocus">
=======
              <input type="tel" value="" class="form-control" id="DoA" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
              <option value="3">Nunca</option>
            </select>
          </div>

          <!--Desea ser donador de organos-->
          <div class="row mb-3 my-3">
            <label for="donar2" class="col-sm-3 col-form-label">Desea ser donador de organos</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="tel" value="" class="form-control" id="donar" name="donar" autofocus="autofocus">
=======
              <input type="tel" value="" class="form-control" id="donar" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <div class="justify-content-lg-end align-items-end text-end ">
            <label class="form-label" for="inlineFormSelectPref">Visible</label>
            <select class="border-radius 3rem" id="inlineFormSelectPref">
              <option  value="0">Elegir...</option>
              <option  value="1">Simpre</option>
              <option value="2">En caso de emergencia</option>
              <option value="3">Nunca</option>
            </select>
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
<<<<<<< HEAD
              <input type="text"  value="" class="form-control" id="nombrePC" name="nombrePC"  required="required" autocomplete="name" autofocus="autofocus">
=======
              <input type="text"  value="" class="form-control" id="nombrePC" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
          <!--Numero-->
          <div class="row mb-3 my-3">
            <label for="telefonoPC2" class="col-sm-3 col-form-label">Teléfono</label>
            <div class="col-sm-9">
<<<<<<< HEAD
              <input type="number" value="" class="form-control" id="telefonoPC" name="telfonoPC"  required="required" autocomplete="tel-local" autofocus="autofocus">
=======
              <input type="number" value="" class="form-control" id="telefonoPC" >
>>>>>>> cf4c44b (migraciones y modelos)
            </div>
          </div>
        </div>
      </div>

      <!--Botones-->
      <div class="bd-content bg-light border-top ">
        <div class="container-md text-black py-4">
<<<<<<< HEAD
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a class="btn btn-secondary ps-3" href="http://localhost/CuidaTe/public/perfil">Cancelar</a>
=======
          <button type="submit" onclick="window.location.href='Perfil.html'" class="btn btn-primary">Guardar</button>
          <a href="Perfil.html" class="btn btn-secondary ps-3">Cancelar</a>      
>>>>>>> cf4c44b (migraciones y modelos)
        </div>
      </div>

    </div>
  </div>
@stop