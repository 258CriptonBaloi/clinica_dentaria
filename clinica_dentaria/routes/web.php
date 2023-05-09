<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//rota para a pagina inicial
Route::get('/', function () {
    return view('index');
});
//rota para a pagina de doutores
Route::get('/doutores', function () {
    return view('doutores');
});
//rota para a pagina galeria
Route::get('/galeria', function () {
    return view('galeria');
});
//rota para a pagina sobre a empresa
Route::get('/sobre', function () {
    return view('sobre');
});
//rota para a pagina servicos
Route::get('/servico', function () {
    return view('servico');
});
//rota para a pagina de contacto
Route::get('/contacto', function () {
    return view('contacto');
});
//rota que redireciona a pagina de administracao depois de login
Route::get('/home', [HomeController::class, 'redirect']);
//rota que redireciona a pagina de medicos
Route::get('/add_doctor_view', [AdminController::class, 'addview']);
//upload dados dos medicos
Route::post('/upload_doctor', [AdminController::class, 'upload']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
