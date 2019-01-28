<?php

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

Route::get("/", "miControlador@inicio");
Route::get("/welcome", "miControlador@welcome");
Route::get("/artistas", "miControlador@artistas");
Route::get("/galeria", "miControlador@galeria");
Route::get("/contacto", "miControlador@contacto");
