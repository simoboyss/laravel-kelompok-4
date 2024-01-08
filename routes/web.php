<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoftskillController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route CRUD Login
Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [SoftskillController::class, 'register'])->name('register');
Route::post('register', [SoftskillController::class, 'register_action'])->name('register.action');
Route::get('login', [SoftskillController::class, 'login'])->name('login');
Route::post('login', [SoftskillController::class, 'login_action'])->name('login.action');
Route::get('password', [SoftskillController::class, 'password'])->name('password');
Route::post('password', [SoftskillController::class, 'password_action'])->name('password.action');
Route::get('logout', [SoftskillController::class, 'logout'])->name('logout');


//Route CRUD Fasilitator
Route::get('/fasilitator', [SoftskillController::class, 'indexFasilitator'])->name('fasilitator');
Route::get('/tambahfasilitator', [SoftskillController::class, 'tambahfasilitator'])->name('tambahfasilitator');
Route::post('/insertdatafasilitator', [SoftskillController::class, 'insertdatafasilitator'])->name('insertdatafasilitator');
Route::get('/tampilkandatafasilitator/{id}', [SoftskillController::class, 'tampilkandatafasilitator'])->name('tampilkandatafasilitator');
Route::post('/updatedatafasilitator/{id}', [SoftskillController::class, 'updatedatafasilitator'])->name('updatedatafasilitator');
Route::get('/deletefasilitator/{id}', [SoftskillController::class, 'deletefasilitator'])->name('deletefasilitator');

//Route CRUD Peserta
Route::get('/peserta', [SoftskillController ::class, 'indexPeserta'])->name('peserta');
Route::get('/tambahpeserta', [SoftskillController ::class, 'tambahpeserta'])->name('tambahpeserta');
Route::post('/insertdata', [SoftskillController ::class, 'insertdata'])->name('insertdata');
Route::get('/editpeserta/{id}', [SoftskillController ::class, 'editpeserta'])->name('editpeserta');
Route::post('/updatepeserta/{id}', [SoftskillController ::class, 'updatepeserta'])->name('updatepeserta');
Route::get('/delete/{id}', [SoftskillController::class, 'delete'])->name('delete');


//Route CRUD Nilai
Route::get('/nilai', [SoftskillController::class,'index']);
Route::get('/nilai/create', [SoftskillController::class,'create']);
Route::post('/nilai/store', [SoftskillController::class,'store']);
Route::get('/nilai/{id}/edit', [SoftskillController::class,'edit']);
Route::put('/nilai/{id}', [SoftskillController::class,'update']);
Route::delete('/nilai/{id}', [SoftskillController::class,'destroy']);

