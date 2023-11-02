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

Route::get('/','App\Http\Controllers\Veiculo\VeiculoController@index')->name('veiculando.index');

Route::get('/cadastrandoVeiculos','App\Http\Controllers\Veiculo\VeiculoController@cadastrandoVeiculos')->name('Veiculando.cadastrandoVeiculos');

Route::get('/editandoVeiculo','App\Http\Controllers\Veiculo\VeiculoController@editandoVeiculo')->name('veiculando.editandoVeiculo');

Route::post('/cadastroVeiculo','App\Http\Controllers\Veiculo\VeiculoController@save')->name('veiculando.save');

Route::get('/Edit/{id}','App\Http\Controllers\Veiculo\VeiculoController@edit')->name('veiculando.edit');

Route::post('/delete/{id}','App\Http\Controllers\Veiculo\VeiculoController@delete')->name('veiculando.delete');