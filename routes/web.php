<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. NoAw create something great!
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


use App\Http\Controllers\ProjectsController;
Route::get('/Uploadtype1', [ ProjectsController::class , 'index']);
Route::post('/UploadXL1', [ProjectsController::class , 'import']);


Route::get('/Uploadtype2', [ ProjectsController::class , 'index2']);
Route::post('/UploadXL2', [ProjectsController::class , 'store2']);


Route::get('/Uploadtype3', [ ProjectsController::class , 'index3']);
Route::post('/UploadXL3', [ProjectsController::class , 'store3']);


Route::get('/Uploadtype4', [ ProjectsController::class , 'index4']);
Route::post('/UploadXL4', [ProjectsController::class , 'store4']);

Route::get('/import_excel', 'ProjectsController@index');
Route::post('/import_excel/import', 'ImportExcelController@import');

