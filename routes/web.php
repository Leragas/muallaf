<?php

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

use App\Http\Controllers;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/login');
});

use App\Http\Controllers\ShopController;
use App\Http\Controllers\DM3treeController;
use App\Http\Controllers\DM5treeController;
use App\Http\Controllers\HomeController;


Route::get('/New', [ShopController::class , 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/register/{sponsor}', [App\Http\Controllers\PublicController::class, 'registerWithSponsor']);

Auth::routes();

use App\Http\Controllers\ProfileController;

//PROFILE ROUTE
Route::get('/Myprofile', [ProfileController::class , 'index']);
Route::get('/editMyProfile', [ProfileController::class , 'edit']);
Route::patch('/UpdateProfile/{user}', [ProfileController::class , 'UpdateProfile']);


use App\Http\Controllers\StudentController;
//Student model Controlelr
Route::get('/Student', [StudentController::class , 'index']);


