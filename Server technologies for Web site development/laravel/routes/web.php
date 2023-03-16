<?php

use App\Http\Controllers;
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

Route::get("/blog/category/{slug?}", 'BlogController@category')->name('category');
Route::get("/blog/category/{slug?}", 'BlogController@article')->name('article');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    Route::get('/',[controllers\Admin\DashboardController::class, "dashboard"])->name('admin.index');
    Route::resource('/category', 'CategoryController');
});
*/
route::get("/",[controllers\BaseController::class,"getIndex"]);
route::get("/products",[controllers\BaseController::class,"getProducts"]);
route::get("/recipes",[controllers\BaseController::class,"getRecipes"]);
route::get("/diets",[controllers\BaseController::class,"getDiets"]);
route::get("/trainings",[controllers\BaseController::class,"getTrainings"]);
route::get("/review",[Controllers\Admin\ReviewController::class,"getIndex"]);
route::post("/review",[Controllers\Admin\ReviewController::class,"postIndex"]);

Route::prefix('adminka')->group(function(){
    Route::get('/',[Controllers\Admin\ReviewController::class, 'getIndex']);
    Route::get('/review/{id}/edit',[Controllers\Admin\ReviewController::class, 'getEdit']);
    Route::post('/review/{id}',[Controllers\Admin\ReviewController::class, 'postUpdate']);
    Route::get('/review/{id}/delete',[Controllers\Admin\ReviewController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [controllers\HomeController::class,"index"])->name('home');