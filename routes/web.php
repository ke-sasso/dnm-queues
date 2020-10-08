<?php

use App\Mail\Correo;
use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmails;
use App\Jobs\ActualizarDias;
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
    SendEmails::dispatch()->onQueue('correosJefatura');
    ActualizarDias::dispatch()->onQueue('dias-feriados');
    return view('welcome');
});
