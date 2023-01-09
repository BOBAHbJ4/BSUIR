<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

route::get("/",[controllers\BaseController::class,"getIndex"]);
route::get("/products",[controllers\BaseController::class,"getProducts"]);
route::get("/recipes",[controllers\BaseController::class,"getRecipes"]);
route::get("/diets",[controllers\BaseController::class,"getDiets"]);
route::get("/trainings",[controllers\BaseController::class,"getTrainings"]);
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); */
