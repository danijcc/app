<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/quienes-somos', 'about')->name('about');

// Route::resource('portafolio', 'ProjectController')
// ->names('projects')
// ->parameters(['portafolio'=>'project']); 

Route::resource('portafolio', App\Http\Controllers\ProjectController::class)
->names('projects')
->parameters(['portafolio'=>'project']); 

Route::view('/contacto', 'contact')->name('contact');

