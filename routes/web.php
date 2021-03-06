<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\facultycontreoller;
use App\Http\Controllers\studentcontroller;

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

Route::get("/",[facultycontreoller::class,'create']);

Route::get("/student",[studentcontroller::class,'create']);

Route::post("/facultyread",[facultycontreoller::class,'store']);

Route::post("/studentread",[studentcontroller::class,'store']);

