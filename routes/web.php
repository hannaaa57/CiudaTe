<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function () {
    return view('cuidate.registro');
});

Route::get('/iniciaSesion', function () {
    return view('cuidate.IniciaSesion');
});

Route::get('/inicio', function () {
    return view('cuidate.Inicio');
});

Route::get('/perfil', function () {
    return view('cuidate.Perfil');
});

Route::get('/editarPerfil', function () {
    return view('cuidate.EditarPerfil');
});

Route::get('/qr', function () {
    return view('cuidate.QR');
});

Route::get('/emergencia', function () {
    return view('cuidate.Emergencia');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['admin', 'role:admin']], function() {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home', [HomeController::class, 'home']);

    //Rutas de alumnos
    Route::get('/alumno/consultar', [AlumnoController::class, 'consultar']);
    Route::get('/alumno/registrar', [AlumnoController::class, 'registrar']);
    Route::get('/reporte/pdf', [AlumnoController::class, 'reportePdf']);

    Route::get('/reporte/pdf/{id}', [AlumnoController::class, 'reporteAlumnoPdf']);

    //Rutas de administrador
    Route::get('/homeAdministrador', [HomeController::class, 'homeAdministrador']);

    //Ruta de ejemplo para obtener detalle de calificacion
    Route::get('alumno/materias', [AlumnoController::class, 'materias']);
});

Route::group(['prefix' => 'alumno','middleware' => ['alumno', 'role:alumno']], function() {
    Route::get('/home', function () {
        return view('alumno.home');
    });
});

require __DIR__.'/auth.php';
