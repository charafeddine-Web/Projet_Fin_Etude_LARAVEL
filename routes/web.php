<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalleController;

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
/*Route::get('/', function () {
    return view('login');
})->name('login');*/
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/About us', function () {
    return view('About');
})->name('About');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/emploi', [UserController::class, 'emploi'])->name('emploi');
    Route::get('/userprofile', [UserController::class, 'userprofile'])->name('userprofile');
    /*Route::get('/userprofile/{id}', [UserController::class, 'edit'])->name('userprofile/edit');
    Route::get('/userprofile/{id}', [UserController::class, 'update'])->name('userprofile/update');*/

});
 
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::get('/admin/profile/{id}', [AdminController::class,'edit'])->name('admin/profile/edit');
    Route::put('/admin/profile/{id}', [AdminController::class,'update'])->name('admin/profile/update');
//Classes
    Route::get('/admin/classes', [ClasseController::class, 'index'])->name('admin/classes');
    Route::get('/admin/classes/Search', [ClasseController::class, 'searchClasse'])->name('Search');
    Route::get('/admin/classes/create', [ClasseController::class, 'create'])->name('admin/classes/create');
    Route::post('/admin/classes/store', [ClasseController::class, 'store'])->name('admin/classes/store');
    Route::get('/admin/classes/show/{id}', [ClasseController::class, 'show'])->name('admin/classes/show');
    Route::get('/admin/classes/edit/{id}', [ClasseController::class, 'edit'])->name('admin/classes/edit');
    Route::put('/admin/classes/edit/{id}', [ClasseController::class, 'update'])->name('admin/classes/update');
    Route::delete('/admin/classes/destroy/{id}', [ClasseController::class, 'destroy'])->name('admin/classes/destroy');

//salles

    Route::get('/admin/salles', [SalleController::class, 'index'])->name('admin/salles');
    Route::get('/admin/salles/Search', [SalleController::class, 'searchsalle'])->name('Search');
    Route::get('/admin/salles/create', [SalleController::class, 'create'])->name('admin/salles/create');
    Route::post('/admin/salles/store', [SalleController::class, 'store'])->name('admin/salles/store');
    Route::get('/admin/salles/show/{id}', [SalleController::class, 'show'])->name('admin/salles/show');
    Route::get('/admin/salles/edit/{id}', [SalleController::class, 'edit'])->name('admin/salles/edit');
    Route::put('/admin/salles/edit/{id}', [SalleController::class, 'update'])->name('admin/salles/update');
    Route::delete('/admin/salles/destroy/{id}', [SalleController::class, 'destroy'])->name('admin/salles/destroy');
 
//Prof




});