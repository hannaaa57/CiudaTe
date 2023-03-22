<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //añadir un nuevo usuario
    //editar datos de un usuario
    //mostrar los datos
    

    public function consultar(){
        $usuarios = Usuario::all();

        return view('cuidate.Perfil', compact('usuarios'));
    }

    public function registrar(){
        //consultas el alumno
        return view('cuidate.registro');
    }
  

}
