<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Gravacao;
use App\Models\Atendente;
use App\Models\Cliente;
use App\Models\User;
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

Route::view('/', '/login');
Route::view('/live-chat', '/live-chat');
Route::view('/request-type', '/request-type');

Route::post("/login", "App\Http\Controllers\Usuario\ClienteController@login")->name("user.login");
Route::post("/save-room", "App\Http\Controllers\Usuario\ClienteController@saveRoomId")->name("user.saveRoom");
Route::post("/request-live-session", "App\Http\Controllers\VideoChat\VideoChatController@createRequest")->name("videoChat.createRoom");