<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);

    return redirect()->route('login');
});

Route::get('/home', [HomeController::class,'index'])->middleware(['auth', 'verified'])->name('home.index');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//EMPRESAS
Route::get('/empresa', [EmpresaController::class,'index'])->middleware(['auth', 'verified'])->name('empresa.index');
Route::get('/cadastra-empresa', [EmpresaController::class,'index_store'])->middleware(['auth', 'verified'])->name('empresa.cadastra');
Route::get('listar-empresas', [EmpresaController::class, 'getAll'])->middleware(['auth', 'verified'])->name('empresa.listar');
Route::get('show/{id}', [EmpresaController::class, 'show'])->middleware(['auth', 'verified'])->name('empresa.show');

Route::post('/empresa',[EmpresaController::class, 'store'])->middleware(['auth', 'verified'])->name('empresa.store');
Route::post('/editar-empresa',[EmpresaController::class, 'update'])->middleware(['auth', 'verified'])->name('empresa.update');
Route::post('/delete-empresa',[EmpresaController::class, 'destroy'])->middleware(['auth', 'verified'])->name('empresa.delete');


//FUNCIONARIOS
Route::get('/funcionario', [FuncionarioController::class,'index'])->middleware(['auth', 'verified'])->name('funcionario.index');
Route::get('/cadastra-funcionario', [FuncionarioController::class,'index_store'])->middleware(['auth', 'verified'])->name('funcionario.cadastra');
Route::get('/listar-funcionarios', [FuncionarioController::class, 'getAll'])->middleware(['auth', 'verified'])->name('funcionario.listar');
// Route::get('show-funcionario', [FuncionarioController::class, 'show'])->middleware(['auth', 'verified'])->name('funcionario.show');

// Route::post('/funcionario',[FuncionarioController::class, 'store'])->middleware(['auth', 'verified'])->name('funcionario.store');
// Route::post('/editar-funcionario',[FuncionarioController::class, 'update'])->middleware(['auth', 'verified'])->name('funcionario.update');
// Route::post('/delete-funcionario',[FuncionarioController::class, 'destroy'])->middleware(['auth', 'verified'])->name('funcionario.delete');




require __DIR__.'/auth.php';
