<?php
use App\Http\Controllers\FormacionController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

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
//pagina de inicio
Route::get('/', function () {
    return Inertia::render('Inicio', [
        'formaciones' => DB::table('formaciones')->get(),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//ruta para formaciones
Route::get('/formaciones', [FormacionController::class, 'mostrarFormaciones']);

//pagina mi progreso
Route::get('/dashboard', [FormacionController::class, 'mostrarDashboard']);

//ruta para recursos
Route::get('/recursos', [FormacionController::class, 'mostrarRecursos']);

//ruta para gestionar cambio de estado
Route::put('/asignaturas/{idAsignatura}/cambiar-estado', [FormacionController::class, 'cambiarEstado']);

//ruta para el login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ruta para cerrar sesion
Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
});
Route::get('/detalles-formacion/{formacion}', [FormacionController::class, 'mostrarDetalles']);
require __DIR__.'/auth.php';
