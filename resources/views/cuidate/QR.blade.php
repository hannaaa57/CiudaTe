@extends('background2')

@section('titulo')
<title>QR</title>
@stop

@section('contenido')

  <!--Mostrar solo alguna informacion y un boton de emergencia-->
  <div class="container-fluid bd-gutter bd-layout bg-dark text-white">
    <!--Botones-->
    <div class="bd-content bg-light border-top container-lg align-items-center justify-content-center">
      <div class="container-md text-black py-4">
        <div class="container-md text-black pb-2">
          <h2>Información sobre n persona</h2>
        </div>
        <label class="form-label fs-3" for="">En caso de emergencia, llena los siguientes datos y pulsa el botón, este te mostrara mas informacion sobre mi y le mandara un mensaje a una persona de confianza.</label>
        <!--Nombre-->
        <div class="row mb-3 my-3">
          <label for="nombreH2" class="col-sm-3 col-form-label">Nombre</label>
          <div class="col-sm-9">
            <input type="text"  value="" class="form-control" id="nombreH" >
          </div>
        </div>
        
        <!--Telefono-->
        <div class="row mb-3 my-3">
          <label for="telefonoH2" class="col-sm-3 col-form-label">Teléfono</label>
          <div class="col-sm-9">
            <input type="number" value="" class="form-control" id="telefonoH" >
          </div>
        </div>

        <!--Descripcion-->
        <div class="row mb-3 my-3">
          <label for="nombreH2" class="col-sm-3 col-form-label">Descripción</label>
          <div class="col-sm-9">
            <textarea name="" id="" cols="30" rows="5" class="form-control" ></textarea>
            <!--<input type="textarea"  value="" class="form-control" id="nombreH" >.-->
          </div>
        </div>

        <div class="d-grid gap-2">
          <button type="submit"  class="btn btn-lg btn-danger" onclick="window.location.href='Emergencia.html'">Emergencia</button>  
        </div>
        
      </div>
    </div>

    <!--Datos perfil-->
    <div class="bd-content bg-light container-lg border-top py-3 ">
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
        <div class="row mb-3 mt-3">
          <label for="genero2" class="col-sm-3 col-form-label">Género</label>
          <div class="col-sm-9">
            <input type="text" value="Mujer" class="form-control" id="genero" disabled>
          </div>
        </div>
      </div>
    </div>

  </div>

@stop