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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("admin")->group(function () {

    Route::get("register", [\App\Http\Controllers\UserController::class, "create"])->name("register.create");
    Route::post("register", [\App\Http\Controllers\UserController::class, "store"])->name("register.store");
    Route::get("login", [\App\Http\Controllers\UserController::class, "showLogin"])->name("login.showLogin");
    Route::post("login", [\App\Http\Controllers\UserController::class, "checkLogin"])->name("login.checkLogin");
    Route::get("logout", [\App\Http\Controllers\UserController::class, "logout"])->name("logout");

    Route::middleware("Auth")->group(function () {
        Route::get("/", function () {
            return view("index");
        })->name("admin");

        Route::get("list", [\App\Http\Controllers\StudentController::class, "index"])->name("list.index");
        Route::get("delete/{id}/student", [\App\Http\Controllers\StudentController::class, "destroy"])->name("delete.destroy");
        Route::get("edit/{id}/student", [\App\Http\Controllers\StudentController::class, "edit"])->name("edit");
        Route::post("edit/{id}/student", [\App\Http\Controllers\StudentController::class, "update"])->name("edit.update");
        Route::get("add/student", [\App\Http\Controllers\StudentController::class, "create"])->name("add.create");
        Route::post("add/student", [\App\Http\Controllers\StudentController::class, "store"])->name("add.store");

        Route::prefix("class")->group(function () {
            Route::get("list", [\App\Http\Controllers\StdClassController::class, "index"])->name("class.list.index");
            Route::get("{id}/detail", [\App\Http\Controllers\StdClassController::class, "detail"])->name("class.detail");


        });
    });
});
